<?php
  include 'inc.php';
 ?>
<html>
<head>

  <title>Post Maps</title>
  <base href="http://localhost/mapg/">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/locationpicker.jquery.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCfZYlnSEcZ7cOU8FET-72EFRfx_UgAtOw" type="text/javascript"></script>
</head>
<body class="container">
  <h3 class="text-center">Post a location</h3>
  <?php
  if (isset($_POST['name']) && isset($_POST['long']) && isset($_POST['lat'])) {
  $query =   "INSERT INTO `places` (`place_id`, `name`, `long`, `lat`, `type`, `address`, `state`, `lga`)
    VALUES (NULL, '".$_POST['name']."', '".$_POST['long']."', '".$_POST['lat']."', '".$_POST['type']."', '".$_POST['address']."', '".$_POST['state']."', '".$_POST['lga']."');";
  $result=  mysqli_query($conn,$query);
    echo '<div class="alert alert-success" role="alert">Added</div>';
  }

  ?>
  <form action="post.php" method="POST">
    <div class="form-horizontal">
    <div class="col-md-6">
      <div class="form-group">
          <label class="col-sm-2 control-label">Name:</label>

          <div class="col-sm-10">
              <input type="text" class="form-control" name="name" />
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">Type:</label>
          <!-- 1. Hotels, 2. Resorts, 3. Bars & Resturants -->
          <div class="col-sm-10">
            <select class="form-control" name="type">
              <option value="Hotel">Hotel</option>
              <option value="Resorts">Resorts</option>
              <option value="Bars & Resturants">Bars & Resturants</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">Location:</label>

          <div class="col-sm-10">
              <input type="text" class="form-control" id="us3-address" name="location" />
          </div>
      </div>
       <div class="form-group">
          <label class="col-sm-2 control-label">state:</label>

          <div class="col-sm-10">
            <select class="form-control" name="state">
              <option value="Osun State">Osun State</option>
            </select>
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">LGA:</label>

          <div class="col-sm-10">
            <select required class="form-control" name="lga">
                  <option parent="30" class="subc" value="Aiyedaade">Aiyedaade</option>
                  <option parent="30" class="subc" value="Aiyedire">Aiyedire</option>
                  <option parent="30" class="subc" value="Atakunmosa East">Atakunmosa East</option>
                  <option parent="30" class="subc" value="Atakunmosa West">Atakunmosa West</option>
                  <option parent="30" class="subc" value="Boluwaduro">Boluwaduro</option>
                  <option parent="30" class="subc" value="Boripe">Boripe</option>
                  <option parent="30" class="subc" value="Ede North">Ede North</option>
                  <option parent="30" class="subc" value="Ede South">Ede South</option>
                  <option parent="30" class="subc" value="Egbedore">Egbedore</option>
                  <option parent="30" class="subc" value="Ejigbo">Ejigbo</option>
                  <option parent="30" class="subc" value="Ife Central">Ife Central</option>
                  <option parent="30" class="subc" value="Ife East">Ife East</option>
                  <option parent="30" class="subc" value="Ife North">Ife North</option>
                  <option parent="30" class="subc" value="Ife South">Ife South</option>
                  <option parent="30" class="subc" value="Ifedayo">Ifedayo</option>
                  <option parent="30" class="subc" value="Ifelodun">Ifelodun</option>
                  <option parent="30" class="subc" value="Ila">Ila</option>
                  <option parent="30" class="subc" value="Ilesa East">Ilesa East</option>
                  <option parent="30" class="subc" value="Ilesa West">Ilesa West</option>
                  <option parent="30" class="subc" value="Irepodun">Irepodun</option>
                  <option parent="30" class="subc" value="Irewole">Irewole</option>
                  <option parent="30" class="subc" value="Isokan">Isokan</option>
                  <option parent="30" class="subc" value="Iwo">Iwo</option>
                  <option parent="30" class="subc" value="Obokun">Obokun</option>
                  <option parent="30" class="subc" value="Odo Otin">Odo Otin</option>
                  <option parent="30" class="subc" value="Ola Oluwa">Ola Oluwa</option>
                  <option parent="30" class="subc" value="Olorunda">Olorunda</option>
                  <option parent="30" class="subc" value="Oriade">Oriade</option>
                  <option parent="30" class="subc" value="Orolu">Orolu</option>
                  <option parent="30" class="subc" value="Osogbo">Osogbo</option>
              </select>
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">Full Address:</label>

          <div class="col-sm-5">
              <input type="text" class="form-control" name="address"/>
          </div>
      </div>
      <div class="m-t-small">
          <label class="p-r-small col-sm-1 control-label">Lat.:</label>

          <div class="col-sm-3">
              <input type="text" class="form-control" style="width: 110px" name="lat" id="us3-lat" />
          </div>
          <label class="p-r-small col-sm-2 control-label">Long.:</label>

          <div class="col-sm-3">
              <input type="text" class="form-control" style="width: 110px" name="long" id="us3-lon" />
          </div>
          
      </div>
      <button type="submit" class="btn btn-success pull-right">Submit</button>

    </div>
    <div class="col-md-6">
      <div id="us3" style="width: 550px; height: 400px;"></div>
      <br /><br />
      
    </div>

    </div>
  </form>

</body>
<script>
    $('#us3').locationpicker({
        location: {
            latitude: 7.4953178,
            longitude: 4.4987719
        },
        // center: new google.maps.LatLng(7.4953178, 4.4987719),

        radius: 300,
        zoom: 11,
        inputBinding: {
            latitudeInput: $('#us3-lat'),
            longitudeInput: $('#us3-lon'),
            locationNameInput: $('#us3-address')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });
</script>
</html>
