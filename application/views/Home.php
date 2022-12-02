<?php  header_template(); ?>
<?=$featured_section?>
<?=$map_spots_section?>
<script type="text/javascript">

  var places = <?=json_encode($places)?>;
  var geoapify_api_key = '<?=$this->config->item('api_key')['geoapify']?>'

//var placesWeatherData
function getPlaceWeatherData(
  place_id,
  callback
  ){
  $.ajax({
    type: 'POST',
    url: '<?=base_url()?>/Home/getPlacesWeatherData/'+place_id,
    proccessData: false,
    success: function(data){
      callback(JSON.parse(data))
    }
  })
}

function getPlaceData(
  place_id,
  callback,
  category=null,
  category_result_limit,
  post_ajax_callback=null
  ){
  if(post_ajax_callback){
    post_ajax_callback()
  }

  $.ajax({
    type: 'POST',
    url: '<?=base_url()?>/Home/getPlacesData/'+place_id+'/'+category+'/'+category_result_limit,
    proccessData: false,
    success: function(data){
      callback(JSON.parse(data),category)
    }
  })
}

</script>
<?php
footer_template(array(
  'js_includes' => array(base_url()."js/home.js")
));
?>