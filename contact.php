<?php
/**
 * Template Name: Contact
 */
?>

<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <?php echo do_shortcode('[contact-form-7 id="94" title="Contact form 1"]'); ?>
      </div>
      <div class="col-md-5 offset-md-2 contact-address">
        <img src="/wp-content/uploads/2017/05/j-house-logo-big.png" class="img-fluid" />
        <hr />
        <p>4343 Von Karman Ave<br />
        Suite 200<br />
        Newport Beach, CA 92660<br />
        <a href="tel:8663110003">866.311.0003</a></p>
        <!DOCTYPE html>
        <html>
          <head>
            <style>
               #map {
                height: 200px;
                width: 100%;
               }
            </style>
          </head>
          <body>
            <div id="map"></div>
            <script>
              function initMap() {
                var uluru = {lat: 33.6647256, lng: -117.8622952};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 14,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }
            </script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrbYW1mTUB45_lEuTwelpcSVzzen_Ul80&callback=initMap">
            </script>
          </body>
        </html>
      </div>
    </div>
  </div>
</section>
