<?php
session_start();
$username = $_SESSION["username"];
$password = $_SESSION["password"];
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
        <li class="active"><a href="C:\xampp\htdocs\html\homepage.html" style="color: white">Home</a></li>
        <li><a href="" style="color: white">Housing Handshakes</a></li>
        <li><a href="C:\xampp\htdocs\php\listings.php" style="color: white">Housing Listing</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="C:\xampp\htdocs\php\createaccount.php" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="C:\xampp\htdocs\php\loginpage.php" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
    </center>
  </div>
</nav>


<!--END Navbar code-->

<br>

<!--Profile Div-->
<!--Profile Div-->

  <!--Welcome Header-->
<div>
  <h1><span>Welcome: </span> <?php echo "$username" ?></h1>
</div>
  <!--Welcome Header-->

<br>

  <!--Row 1-->
  <div class="container-fluid" style="background-color: grey; border-style: solid; margin: 1px;">
    <h3>My Active Listings</h3>
    <div class="row" style="margin: 1px;">
      <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
        <br>
      </div>

      <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
        <br>
      </div>

      <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
        <a href=""><button style="margin: 2px; width: 300px">View Listing</button></a>
          <br>
        <a href=""><button style="margin: 2px; width: 300px">Edit Listing</button></a>
          <br>
        <a href=""><button style="margin: 2px; width: 300px">Delete Listing</button></a>
          <br>
      </div>
    </div>
    <br>
  </div>
  <!--END Row 1-->

  <!--Row 2-->
  <div class="container-fluid" style="background-color: grey; border-style: solid; margin: 2px;">
    <h3>My Favorites</h3>
    <div class="row" style="margin: 1px;">
      <div class="col-md-8" style="background-color: white;border-style: solid;border-color: gray">
        <br>
      </div>

      <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
        <a href=""><button style="margin: 2px; width: 300px">Add Listing</button></a>
          <br>
      </div>
    </div>
    <br>
  </div>
  <!--END Row 2-->

  <!--ROW 3-->
  <div class="container-fluid" style="background-color: grey; border-style: solid; margin: 2px;">
    <h3>Account Details</h3>
    <div class="row" style="margin: 1px;">
      <div class="col-md-8" style="background-color: white;border-style: solid;border-color: gray">
        <div class="row">
          <div class="col-md-6">
            <div class="col-25">
             <label for="">Your Username:</label>
            </div>
            <div class="col-75">
              <span><?php echo "$password" ?></span>
            </div>
            <br>
          </div>
          <div class="col-md-6">
            <div class="col-25" style="margin: 5px">
             <label for="">Preferred Contact Number:</label>
            </div>
            <div class="col-75" style="margin: 5px">
              <span><?php echo "$password" ?></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h5>Preferred Method of Contact</h5>
            <form>
              <div class="checkbox">
                <label><input type="checkbox" value="">Phone</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="">Text</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="">E-Mail</label>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="col-25" style="margin: 5px">
             <label for="">Preferred E-mail</label>
            </div>
            <div class="col-75" style="margin: 5px">
              <span><?php echo "$password" ?></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
          <a href=""><button style="margin: 2px; width: 300px">Update Account</button></a>
        <br>
          <a href=""><button style="margin: 2px; width: 300px">Delete Account</button></a>
        <br>
      </div>
    </div>
    <br>
  </div>
  <!--END Row 3-->

  <a href = "logout.php"><button style="margin: 2px"><span style="color: black">Sign Out</span></button></a>

<!--END Profile Div-->
<!--END Profile Div-->

<br>

<!--Footer-->
<footer style="background-color:maroon;"">

<center>

	<!--Links-->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="C:\xampp\htdocs\html\home2.html" style="color: white">Home</a>
			</div>
			<div class="col-md-3">
				<a href="C:\xampp\htdocs\html\home2.html" style="color: white">Housing Handshakes</a>
			</div>
			<div class="col-md-3">
				<a href="C:\xampp\htdocs\html\home2.html" style="color: white">Housings Listings</a>
			</div>
			<div class="col-md-3">
				<a href="C:\xampp\htdocs\html\home2.html" style="color: white">Login</a>
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