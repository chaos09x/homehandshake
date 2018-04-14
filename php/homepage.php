<?php
  session_start();
?>

<!Doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap 3-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--END Bootstrap 3-->
    <link href="css\handshake2.css" type="text/css" rel="stylesheet" />
  </head>

  <!-- Start of Sticky Navbar Code -->
    <style>
      body {
        margin: 0;
        font-family: Arial;
      }

      .top-container {

        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
      }

      .content {

        padding: 16px; 

      }

      .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1;
      }

      .sticky + .content {

      	padding-top: 100px;

      }

      .container {
          position: relative;
          text-align: center;
      }

      .centered {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
      }
    </style>
  <!-- END Start of Sticky Navbar Code -->
  

  <body>

  	<!--Jumbotron code-->
    	<div>
      	<img src="img/KSU Fountain.jpg" alt = "Header Image" style="width: 100%; height: 50%;">
    	</div>
    <!--END Jumbotron code-->

    <!--Navbar code-->
      <div class="header" id="myHeader">
        <nav class="navbar navbar-inverse" style="background-color:#002664">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
            </div>
            <center>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="homepage.php" style="color: white">Home</a></li>
                <li><a href="browselisting.php" style="color: white">Browse Listings</a></li>
                <?php
                  if(isset($_SESSION["userid"])){
                    echo "<li><a href='myaccount.php' style='color: white'>My Account</a></li>";
                  } else {
                    echo "<li><a href='loginpage.html' style='color: white'>Login</a></li>";
                  }
                ?> 
              </ul>
            </div>
            </center>
          </div>
        </nav>
      </div>
    <!--END Navbar code-->

    <br>

    <!--Title Font-Century-->
      <center>
        <h1 style="font-style: Century;">Welcome to Housing Handshakes!</h1>
        <h4>Housing Handshakes is the web app that advertises short-term vacancy in a house or apartment.</h4>
      </center>
    <!-- END of Title-->

    <br>

    <!-- Google map -->
      <center>

      <div id="map" style="width:75%;height:450px;"></div>

      <script>
        function myMap() {
        var mapOptions = {
            center: new google.maps.LatLng(41.149063, -81.350555),
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        }
      </script>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwPMtmTS5-ruHic9Qa3Q9h_R-I0ptYC3w&callback=myMap"></script>

      <script>
        function initMap() {

          var theProvince = {lat: 41.147250, lng: -81.350555};

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: theProvince
          });
          var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<p><b> The Province</b></p>'+
              '<p>Website: The Province, <a href="http://www.theprovincekent.com/">'+
              'http://www.theprovincekent.com</a> '+
              '</div>'+
              '</div>';

          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });

          var marker = new google.maps.Marker({
            position: theProvince,
            map: map,
            title: 'The Province'
            });
          marker.addListener('click', function() {
            infowindow.open(map, marker);
          });

        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwPMtmTS5-ruHic9Qa3Q9h_R-I0ptYC3w&callback=initMap">
      </script>

      </center>
    <!-- End Google map -->

    <br>

    <!--Row 1 code-->
    	<center>
    		<div class="container">
    			<div class="row">
            <!--END Column 1 code-->      
      				<div id="col1" class="col-md-6">
      					<h1>We understand.</h1>
                <center>
        					<p style="width: 85%">
        						Subleasing is difficult - hands down. Whether you are studying abroad, landed an internship (congrats!), headed home for the summer, or simply can't afford your current living - we can help.</p>
                </center>
      				</div>
            <!--END Column 1 code-->				

            <!--Column 2 code-->
      				<div class="col-md-6" style=" ">
      					<h1>Special Offer</h1>
      					<span class="style2"><b>Learn more about Housing Handshakes!</b></span><p>
      					You will find the home you have been searching for.</p>
                <center>
        					<form action="mailto:email@youraddress.com" method="post" enctype="text/plain" name="info"
        					id="info">
          					<table border="0">
          						<colgroup span="1" width="40%" align="left" />
          						<colgroup span=" 1" align="left" />
          						<tr>
          							<td>
          								<p>
          								First name</p>
          							</td>
          							<td>
          								<input type="text" name="first" id="first" size="20" />
          							</td>
          						</tr>
          						<tr>
          							<td>
          								<p>Last name</p>
          							</td>
          							<td>
          								<input type="text" name="last" id="last" size="20" />
          							</td>
          						</tr>
          						<tr>
          							<td>
          								<p>Telephone</p>
          							</td>
          							<td>
          								<input type="text" name="phone" id="phone" size="20" />
                        </td>
          						</tr>
          						<tr>
          							<td>
          								<p>E-mail address</p>
          							</td>
          							<td>
          								<input type="text" name="email" id="email" size="20" />
                        </td>
          						</tr>
          					</table>
        						<br>		
        						<p><button type="submit">Discover!</button></p>
        					</form>
              </center>
      				</div>
            <!-- END Column 2 code-->
          </div>
        </div>  
      </center>
    <!-- END Row 1 code-->

    <br>

    <!--HandShake Experience Div-->
      <center>
      	<div class="container">
      		<div class="row">
      			<h1>The Handshake Experience</h1>
      				<span>1) Select your campus.</span>
      				<br>
      				<span>2) Browse our listings (depending on your needs).</span>
      				<br>
      				<span>3) Make the connection!</span>
      		</div>
      	</div>
      </center>
    <!--END HandShake Experience Div-->

    <br>

    <!--Disclaimer-->
      <center>
      	<button type="button" class="btn btn-warning">Warning</button>
      		<h5 style="font-style: italic;">Housing Handshakes connects you to people who are looking to enter a subleasing agreement - nothing more. Use discretion when sharing personal information with others over the internet. We are not resposible for any contractual relationships or harm inflicted from utilizing this service.</h5>
      </center>
    <!-- END of Disclaimer-->

    <br>

    <!--Footer-->
      <footer style="background-color:#002664;">

        <center>

          <!--Links-->
            <div class="container">
              <div class="row"><br>
                <div class="col-md-4">
                  <a href="homepage.php" style="color: white"> Home </a>
                </div>
                <div class="col-md-4">
                  <a href="browselisting.php" style="color: white"> Browse Listings </a>
                </div>
          	   <div class="col-md-4">
                  <?php
                      if(isset($_SESSION["userid"])){
                        echo "<a href='myaccount.php' style='color: white'>My Account</a>";
                      } else {
                        echo "<a href='loginpage.html' style='color: white'><span class='glyphicon glyphicon-log-in'></span> Login </a>";
                      }
                  ?> 
                </div>
              </div>
            </div>
          <!--End Links-->

        </center>

        <br>

        <!--Copyright-->
          <div>
            <center>
              <span style="color: white;">2018 © Copyright Team 3 Solutions. All rights reserved.</span>
            </center>
          <div>
        <!--End of Copyright-->

        <br>

      </footer>
    <!--END Footer-->

    <!-- Start Sticky Navbar script -->

    	<script>
      	window.onscroll = function() {myFunction()};

      	var header = document.getElementById("myHeader");
      	var sticky = header.offsetTop;

      	function myFunction() {
      	  if (window.pageYOffset >= sticky) {
      	    header.classList.add("sticky");
      	  } else {
      	    header.classList.remove("sticky");
      	  }
      	}
    	</script>

    <!-- End Sticky Navbar script -->

  </body>
</html>