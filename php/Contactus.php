<?php
  session_start();
  $userid = $_SESSION["userid"];
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
  <link href="C:\xampp\htdocs\css\handshake2.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<!-- Start of Sticky Navbar Code -->

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
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

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>

<!-- End of Sticky Navbar Code -->

<body >

  <!--Jumbotron code-->

    <div>
      <img src="img/KSU Fountain.jpg" alt = "Header Image" style="width: 100%; height: 100%;">
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
                <li class="active"><a href="homepage.html" style="color: white">Home</a></li>
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

<!--Begin Form Code-->

<center>

<h3>Contact Form</h3>

</center>

<div class="container1">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="Who are you?">Who are you?</label>
    <select id="person" name="person">
      <option value="Student">Student</option>
      <option value="Apartment Complex">Apartment Complex</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<!--End Form Code-->

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