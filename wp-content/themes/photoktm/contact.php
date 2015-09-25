<?php
/**
* Template Name: Contact
 **/

get_header(); ?>

<div class="default-page two-column">
	<div>
		<div id="map-canvas"></div>
		<!--<iframe
			height="320"
			frameborder="0" style="border:0; width:100%;"
			src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB2H151trB6PyZYta509EdXAqW5b07nvDg
			&q=50,50" allowfullscreen>
		</iframe>-->
	</div> <!-- /.featured-image -->
	<div class="container page-content">
		<div class="row">
			<div class="col-sm-6 text-center">
				<h3>Photo Kathmandu</h3>
				<p>
					<strong>GPO Box:</strong> 8975 EPC 1516 <br>
					Arun Thapa Chowk, Jhamsikhel, Lalitpur <br>
					Kathmandu, Nepal<br>
					<strong>Phone: </strong>+977 1 5013501<br>
					<strong>Email:</strong> mail@photoktm.com<br> 
				</p>
			</div> <!-- /.col-sm-6 -->
			<div class="col-sm-6 text-center">
				<h3>The Festival Hub</h3>
				<p>
					<strong>Traditional Inn</strong> <br>
					Swotha 11<br>
					Patan Durbar Square<br>
					Patan, Nepal<br>
					<strong>Phone:</strong> +977 1 5547834<br>
				</p>
			</div> <!-- /.col-sm-6 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
	
	
</div> <!-- /.default-page two-column -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
  <script>

var locations = [
      ['Photo Kathmandu', 27.680690, 85.310459, 2],
      ['Traditional Inn', 27.672058, 85.327153, 1]      
    ];

    var map = new google.maps.Map(document.getElementById('map-canvas'), {
      zoom: 14,
      center: new google.maps.LatLng(27.681350, 85.323763),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    var iconBase = '<?php echo esc_url( get_template_directory_uri() ); ?>/images/marker-01.png';
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: iconBase
      	
      });
      var infowindow = new google.maps.InfoWindow({
      content: locations[i][0],
      maxWidth: 160
      });
      infowindow.open(map, marker);
      
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    
    }
    
</script>
<?php get_footer(); ?>

