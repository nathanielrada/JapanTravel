<section class="map-spots pt-3">
  <div class="container h-100">
    <div class="row">
      <div class="col-md-5 info">
        <div class="places-info-container mb-3">
          <div class="row">
            <div class="col-md-12">
              <h5 class="name">&nbsp;</h5>
              <h6 class="name_jp">&nbsp;</h6>
              <ul>
                <li>Address: <span class="address"></span></li>
                <li>Website: <a href="" class="website"></a></li>
                <li>City: <span class="city"></span></li>
                <li>County: <span class="county"></span></li>
                <li>State: <span class="state"></span></li>
              </ul>            </div>
          </div>
          <hr/>
          <div class="row">
            <div class="col-md-12">
              <h6>Nearby amenities</h6>
              <ul class="nav nav-tabs places-category-navbar" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#accommodation_content" type="button" role="tab" aria-controls="accommodation_content" aria-selected="true" data-category="accommodation"><i class="fa-solid fa-hotel"></i>&nbsp;Hotels</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#catering_content" type="button" role="tab" aria-controls="catering_content" aria-selected="false" data-category="catering"><i class="fa-solid fa-utensils"></i>&nbsp;Restaurants</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#public_transport_content" type="button" role="tab" aria-controls="public_transport_content" aria-selected="false" data-category="public_transport"><i class="fa-solid fa-train"></i>&nbsp;Railways</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#service_financial_content" type="button" role="tab" aria-controls="service_financial_content" aria-selected="false" data-category="service.financial"><i class="fa-solid fa-money-bills"></i>&nbsp;ATMs</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#commercial_gift_and_souvenir_content" type="button" role="tab" aria-controls="commercial_gift_and_souvenir_content" aria-selected="false" data-category="commercial.gift_and_souvenir"><i class="fa-solid fa-gifts"></i>&nbsp;Gift shops</button>
                </li>
              </ul>
              <div class="tab-content places-category-content">
                <div class="tab-pane fade show active" id="accommodation_content" role="tabpanel">
                  <div class="spinner">
                    <div class="text-center">
                      <div class="spinner-border m-5" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-container"></div>
                </div>
                <div class="tab-pane fade" id="catering_content" role="tabpanel">
                  <div class="spinner">
                    <div class="text-center">
                      <div class="spinner-border m-5" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-container"></div>
                </div>
                <div class="tab-pane fade" id="public_transport_content" role="tabpanel">
                  <div class="spinner">
                    <div class="text-center">
                      <div class="spinner-border m-5" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-container"></div>
                </div>
                <div class="tab-pane fade" id="service_financial_content" role="tabpanel">
                  <div class="spinner">
                    <div class="text-center">
                      <div class="spinner-border m-5" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-container"></div>
                </div>
                <div class="tab-pane fade" id="commercial_gift_and_souvenir_content" role="tabpanel">
                  <div class="spinner">
                    <div class="text-center">
                      <div class="spinner-border m-5" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-container"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="weather-info-container mb-3">
          <div class="row">
            <div class="col-6 col-sm-6 col-md-12 col-lg-6 weather-icon-temp-container">
              <div class="row">
                <div class="col-6 col-sm-6 col-md-6">
                  <img class="weather-icon" src=""/>
                </div>
                <div class="col-6  col-sm-6 col-md-6">
                  <span class="temp"></span>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-12 col-lg-6">
              <div class="list-container">
                <ul class="a">
                  <li>High: <span class="high"></span></li>
                  <li>Low: <span class="low"></span></li>
                  <li>humidity: <span class="humidity"></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="map-container">
          <img class="japan-map" src="images/japan_map.png"/>
          <?php
          $pin_container_style = array(
            "top: 60.5%; left: 66%;",
            "top: 61%; left: 65%;",
            "top: 62%; left: 45.5%;",
            "top: 65.5%; left: 45.6%;",
            "top: 16.5%; left: 73.5%;",
            "top: 63%; left: 53%;"
            );
          foreach ($places as $key => $value) {
            ?>
            <div class="pin-container" style="<?=$pin_container_style[$key]?>">
              <i class="fa-solid fa-location-dot map-pin" data-pin-id='<?=$key?>'></i>
              <div class="map-pin-shadow"></div>
              <div class="location-info-container" data-place-id='<?=$key?>'>
                <div class="row">
                  <div class="col-md-12">
                    <div style="background-image:   url(images/places/<?=$key?>.jpg);" class="place-image"></div>
                  </div>
                </div>
                <div class="container info-container">
                  <div class="row">
                    <div class="col-md-12">
                      <h5>
                        <?=$value->name?>
                      </h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <span="details">
                      <?=$value->description?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- pin-container -->
            <?php  }//foreach end?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- openstreetmap modal -->
<div id="map_modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class="full-address"></h6>
        <div class="spinner">
          <div class="text-center">
            <div class="spinner-border m-5" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
        </div>
        <div class="map-container">
          <img src="" class="map"/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- openstreetmap modal  end-->