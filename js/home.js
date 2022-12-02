var currentPlaceId
var category_result_limit = 20

$(document).ready(function(){
    //disable places nav link on load
    $('.places-category-navbar .nav-link').attr('disabled',true)

    //update tab content on nav link click
    $('.places-category-navbar .nav-link').on('click',function(){
        var this_navlink = this
        getPlaceData(
            currentPlaceId,
            updatePlaceNearbyView,
            $('.places-category-navbar .nav-link.active').data('category'),
            category_result_limit,
            function(){
                //hide list before ajax
                $($(this_navlink).data('bs-target')).find('.list-container').fadeOut(0,function(){
                    //show spinner before ajax
                    $($(this_navlink).data('bs-target')).find('.spinner').fadeIn()
                })
            }
        )
    })

    //pick a random place on load
    var random_place_index = Math.floor(Math.random() * (places.length -1));
    currentPlaceId = random_place_index
    getPlaceMultipleData(
        random_place_index,
        updatePlaceView,
        updatePlaceWeatherView,
        updatePlaceNearbyView,
        $('.places-category-navbar .nav-link.active').data('category'),
        category_result_limit
    )
    //bounce pin
    $('.map-pin[data-pin-id='+random_place_index+']').addClass('bounce')
    $('.map-pin[data-pin-id='+random_place_index+']').parent().find('.map-pin-shadow').addClass('bounce')

})//ready

//on pin hover
$('.map-spots .pin-container').hover(function(e){
    //remove intial bounce animation
    $('.map-pin').removeClass('bounce')
    $('.map-pin-shadow').removeClass('bounce')

    if(e.type == 'mouseenter'){
        currentPlaceId = $(this).find('.location-info-container').data('place-id')

        getPlaceMultipleData(
            currentPlaceId,
            updatePlaceView,
            updatePlaceWeatherView,
            updatePlaceNearbyView,
            $('.places-category-navbar .nav-link.active').data('category'),
            category_result_limit
        )

        //show tooltip
        $(this).find('.location-info-container').fadeIn(250)

        //hide other pins
        $('.map-pin').not($(this).find('.map-pin').show()).fadeOut(250)
        $('.map-pin-shadow').not($(this).find('.map-pin').show()).fadeOut(250)
    }else{
        //hide tooltip
        $(this).find('.location-info-container').fadeOut(250)

        //show all pins
        $('.map-pin').fadeIn(250)
        $('.map-pin-shadow').fadeIn(250)
    }
})

function getPlaceMultipleData(
    currentPlaceId,
    updatePlaceView,
    updatePlaceWeatherView,
    updatePlaceNearbyView,
    category,
    category_result_limit
){
        getPlaceData(currentPlaceId,updatePlaceView)
        getPlaceWeatherData(currentPlaceId,updatePlaceWeatherView)
        getPlaceData(
            currentPlaceId,
            updatePlaceNearbyView,
            $('.places-category-navbar .nav-link.active').data('category'),
            category_result_limit
        )    
}

//prepend "//" to links without http/s
function fixLink(website){
  return (website.includes('//') ? website : '//'+website)//prepend "//" to links without http/s
}

function updatePlaceView(data){

    $('.places-info-container span').fadeOut(250,function(){
        $('section.map-spots .places-info-container .name').html(data.features[0].properties.name_international.en)
        $('section.map-spots .places-info-container .name_jp').html('('+data.features[0].properties.name_international.ja+')')
        $('section.map-spots .places-info-container span.address').html(data.features[0].properties.formatted)

        var website = data.features[0].properties.website;
        if(website){
            $('section.map-spots .places-info-container a.website').html(website+' <i class="fa-solid fa-arrow-up-right-from-square"></i>')
            $('section.map-spots .places-info-container a.website').attr('href',fixLink(website))
            $('section.map-spots .places-info-container a.website').attr('target',"_blank")
        }else{
            $('section.map-spots .places-info-container a.website').html('N/A')
            $('section.map-spots .places-info-container a.website').attr('href','#/')
            $('section.map-spots .places-info-container a.website').attr('target',"")
        }

        $('section.map-spots .places-info-container span.city').html(data.features[0].properties.city)
        $('section.map-spots .places-info-container span.county').html(data.features[0].properties.county)

        var state = data.features[0].properties.state
        state = state || 'N/A';
        $('section.map-spots .places-info-container span.state').html(state)

        $('.places-info-container span').fadeIn(250)
    })
}

function updatePlaceWeatherView(data){
    //update weather
    $('.weather-info-container span').fadeOut(250,function(){
        $('section.map-spots .weather-info-container span.temp').html(parseInt(data.main.temp)+'°')
        $('section.map-spots .weather-info-container span.high').html(data.main.temp_max+'°')
        $('section.map-spots .weather-info-container span.low').html(data.main.temp_min+'°')
        $('section.map-spots .weather-info-container span.humidity').html(data.main.humidity+'%')
        $('.weather-info-container span').fadeIn(250)
    })
    //update weather icon
    $('.weather-info-container .weather-icon').fadeOut(250,function(){
        $('section.map-spots .weather-info-container img.weather-icon').attr('src', 'http://openweathermap.org/img/wn/'+data.weather[0].icon+'@2x.png')
        $('.weather-info-container .weather-icon').fadeIn(250)
    })
}

function updatePlaceNearbyView(data,category){

    var tab_content_id = category+'_content'
    tab_content_id = tab_content_id.replace('.','_')//dot to underscore

    $('#'+tab_content_id+' .list-container').html('<ul></ul>')

    $.each(data.features,function(key,value){

        features = getAccommodationFeaturesString(value.properties.datasource.raw)

        $('#'+tab_content_id+' .list-container ul').append('\
            <li>\
                <div class="row">\
                    <div class="col-md-12">\
                        <h6>'+value.properties.address_line1+'&nbsp;&nbsp;<a href="#/" onclick="javascript: showMapModal(\''+encodeURI(value.properties.address_line1)+'\','+value.properties.lat+','+value.properties.lon+',\''+encodeURI(value.properties.formatted)+'\')">view map</a></h6>\
                    </div>\
                </div>\
                <div class="row">\
                    <div class="col-md-12">\
                        '+features+'\
                    </div>\
                </div>\
            </li>\
        ')
    })

    //hide spinner
    $('#'+tab_content_id+' .spinner').hide(0,function(){
        $('#'+tab_content_id+' .list-container').fadeIn()
    })

    //enable places nav link
    $('.places-category-navbar .nav-link').attr('disabled',false)

}

function getAccommodationFeaturesString(data){
    var info_to_get = ['smoking','rooms', 'wheelchair', 'contactwebsite', 'internet_access', 'website', 'level', 'phone']
    var features = ''
    var icons_string = ''
    $.each(data,function(key1, value1){
        if( info_to_get .includes(key1) ){
            switch(key1) {
                case 'wheelchair':
                    if( value1 == 'yes'){
                        icons_string += '<div class="col-md-1"><i class="fa-solid fa-wheelchair"></i></div>';
                    }
                break;
                case 'smoking':
                    if( value1 == 'yes'){
                        icons_string += '<div class="col-md-1"><i class="fa-solid fa-smoking"></i></div>';
                    }
                break;
                case 'internet_access':
                    switch(value1) {
                        case 'wlan':
                            icons_string += '<div class="col-md-1"><i class="fa-solid fa-wifi"></i></div>';
                        break;
                        case 'yes':
                        case 'wired':
                            icons_string += '<div class="col-md-1"><i class="fa-solid fa-network-wired"></i></div>';
                        break;
                        default:
                    }// end internet_access switch case
                break;
                case 'rooms':
                    icons_string += '<div class="col-md-2"><i class="fa-solid fa-door-open"></i>&nbsp;'+value1+'</div>';
                break;
                case 'website':
                    features += '<div class="col-md-12 mb-1"><a href="'+fixLink(value1)+'" target="_blank">Website <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>';
                break;
                case 'phone':
                    features += '<div class="col-md-12 mb-1"><i class="fa-solid fa-phone"></i>&nbsp;'+value1+'</div>';
                break;
                case 'level':
                    icons_string += '<div class="col-md-2 mb-1"><i class="fa-solid fa-stairs"></i>&nbsp;'+parseInt(value1)+'</div>';
                break;
                default:
                    features += '<div class="col-md-12 mb-1">'+key1+': '+value1+'</div>';
            }//switch end
        }
    })
    //put features in row -> column
    features = '<div class="row mb-1">'+features+'</div>'

    //put icons in row -> column
    icons_string = '<div class="row icons-row">'+icons_string+'</div>'

    //put icons only at the end
    features += icons_string;
    return features
}

function showMapModal(name, lat, long, full_address){
    $('#map_modal').modal('show')

    //show spinner, hide map
    $('#map_modal img.map').fadeOut(0,function(){
        $('#map_modal .spinner').fadeIn()
    })
    var map_image_url = "https://maps.geoapify.com/v1/staticmap?style=osm-carto&width=1100&height=600&center=lonlat:"+long+","+lat+"&zoom=15&marker=lonlat:"+long+","+lat+";color:%23ff0000;size:medium&apiKey="+geoapify_api_key
    $('#map_modal .modal-title').html(decodeURI(name))
    $('#map_modal .full-address').html(decodeURI(full_address))
    $('#map_modal img.map').attr('src',map_image_url)

    $('#map_modal img.map').on('load',function(){
        //show map, hide spinner
        $('#map_modal .spinner').fadeOut(0,function(){
            $('#map_modal img.map').fadeIn()
        })
    })
}