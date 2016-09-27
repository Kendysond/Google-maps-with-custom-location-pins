<?php
  include 'inc.php';
 ?>
<html>
<head>

  <title>Nice Maps</title>
  <base href="http://localhost/mapg/">
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <script src="assets/jquery.min.js"></script>
  <script src="assets/maplace.min.js"></script>
  
</head>
<body>
  <h2>Cool Maps</h2>
  <!-- <div id="map" style="height: 80%; width:100%;"> -->
  <!-- <div id="gmap" style="with:300px;height:250px;"></div> -->
  <!-- <div id="controls"></div> -->
  <div id="gmap-dropdown" style="height: 80%; width:100%;"></div>


</div>
<script type="text/javascript">
$(function() {
   var locations = [

      <?php
      $query = "SELECT * FROM places";
      $result = mysqli_query($conn,$query);
      if ($result->num_rows > 0) {
        // output data of each row
          while($row = $result->fetch_assoc()) {
           echo "{
                lat: ".$row["lat"].",
                lon: ".$row["long"].",
                title: '".$row["name"].' - '.$row["lga"]."',
                html: '<h3>".$row["name"]."</h3> <p>Lga : ".$row["lga"]."</p><p>State : ".$row["state"]."</p>',
                zoom: 14
             },";
           }
      }
       ?>


    ];
    new Maplace({
        locations: locations,
        controls_on_map: true,
        map_div: '#gmap-dropdown',
        controls_title: 'Choose a location:',
        listeners: {
            click: function(map, event) {
                alert('That was a click!');
            }
        }
    }).Load();
});
   

    // var map = new google.maps.Map(document.getElementById('map'), {
    //   zoom: 8,
    //   // @7.4953178,4.4987719,13z
    //   center: new google.maps.LatLng(7.4953178, 4.4987719),
    //   mapTypeId: google.maps.MapTypeId.ROADMAP
    // });

    // var infowindow = new google.maps.InfoWindow();

    // var marker, i;

    // for (i = 0; i < locations.length; i++) {
    //   marker = new google.maps.Marker({
    //     position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    //     map: map,
    //     icon:'http://localhost/mapg/png/map-small.png'

    //   });

    //   google.maps.event.addListener(marker, 'click', (function(marker, i) {
    //     return function() {
    //       infowindow.setContent(locations[i][0]);
    //       infowindow.open(map, marker);
    //     }
    //   })(marker, i));
    // }
  </script>
</body>
</html>
