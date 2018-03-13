<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query For Active Listing
$stm = $conn->prepare("
SELECT picture.pic1, listings.listingid, listings.title, listings.address, listings.city, listings.state, listings.zip
FROM picture
INNER JOIN listings
	ON listings.listingid = picture.listingid");

// Execute Query
$stm->execute();

// Assign Result
$result = $stm->get_result();
?>

<!Doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap 4
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  END Bootstrap 4-->

  <!--Bootstrap 3-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--END Bootstrap 3-->
  <link href="css\handshake2.css" type="text/css" rel="stylesheet" />
  <link href="css\sidenav.css" rel="stylesheet" />
  <title></title>
<style>

</style>
</head>

<body>

<!--Jumbotron code-->
  <div>
  <img src="img\image.jpg" style="width: 100%; height: 400px;">
  </div>
<!--END Jumbotron code-->

<!--Navbar code-->

<nav class="navbar navbar-inverse" style="background-color: maroon">
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
        <li class="active"><a href="homepage.html" style="color: white">Home</a></li>
		<li><a href="myaccount.php" style="color: white">My Account</a></li>
        <li><a href="browselisting.php" style="color: white">Browse Listings</a></li>
        <li><a href="createaccount.html" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
        <li><a href="loginpage.html" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      </ul>
    </div>
    </center>
  </div>
</nav>


<!--END Navbar code-->

<br>
<div id="main">
<!--Titleey Font-Centur-->
<center>
	<button type="button" class="" id="createListing" name="createListing">Create Listing</button> 
	<input type="" name="" id="t1" size="100%">
	<button type="button" class="" id="searchListing" name="searchListing">Search Listing</button>
</center>
<!-- END of Title-->

<div id="mySidenav" class="sidenav" style="color: maroon">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
  <input type="checkbox">Furnished</a><br>
  <input type="checkbox">Gym<br>
  <input type="checkbox">Laundry<br>
  <input type="checkbox">Pets<br>
  <input type="checkbox">Cooling<br>
  <input type="checkbox">Parking<br>
  <input type="checkbox">Pool<br>
  <input type="checkbox">Garage</a><br>
  <input type="checkbox">Property Management<br>
  <input type="checkbox">Hot Tub<br>
  <input type="checkbox">Private Bathroom<br>
  <input type="checkbox">Floor Number<br>
  <input type="checkbox">Heating<br>
  <button type="button">Submit Filter</button><br>
</div>

<!-- Use any element to open the sidenav -->
<button onclick="openNav()" button type="button">Open</button>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

<?php
while($row = $result->fetch_assoc())
{
	
?>

<br>
<!--Row 1-->
  <div class="container-fluid" style="background-color: grey; border-style: solid; margin: 1px;">
    <div class="row" style="margin: 1px;">
	
	<center>
      <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray; padding: 0; max-width: 50%">
        <img src = "<?php echo $row["pic1"] ?>" style="max-width: 100% ">
      </div>
	</center>
	
      <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
        <div class="row">
          <div class="col-md-6" style="text-align: left;">
            <span>Location:</span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <span><?php echo $row["address"], $row["state"], $row["zip"]; ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" style="text-align: left;">
             <span>Price:</span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <span><?php echo "$  per month" ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" style="text-align: left;">
            <span>Holder:</span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <span><?php echo "" ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" style="text-align: left;">
            <span>Holder:</span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <span><?php echo "" ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
        <center>
        <a href=""><button style="margin: 2px; width: 50%">View Listing</button></a>
          <br>
        <a href=""><button style="margin: 2px; width: 50%">Edit Listing</button></a>
          <br>
        </center>
      </div>
    </div>
    <br>
  </div>
  <hr>
  <!--END Row 1-->
  
  <?php
}
  ?>
</div>
<!--Footer-->
<footer style="background-color:maroon;"">

<center>

  <!--Links-->
  <div class="container">
    <div class="row"><br>
      <div class="col-md-2">
        <a href="homepage.html" style="color: white"> Home </a>
      </div>
	  <div class="col-md-2">
        <a href="myaccount.php" style="color: white"> My Account </a>
      </div>
      <div class="col-md-2">
        <a href="browselisting.php" style="color: white"> Browse Listings </a>
      </div>
      <div class="col-md-2">
        <a href="createaccount.html" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up </a>
      </div>
	  <div class="col-md-2">
        <a href="loginpage.html" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login </a>
      </div>
    </div>
  </div>
  <!--End Links-->

</center>
  <br>

  <!--Copyright-->
  <div>
    <center>
      <span style="color: white;">2018 © Copyright Orange Solutions. All rights reserved.</span>
    </center>
  <div>
  <!--End of Copyright-->

  <br>

</footer>
<!--END Footer-->

</body>

</html>

