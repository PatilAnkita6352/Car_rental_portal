<?php 
 session_start();
 if(isset($_SESSION['username'])) 
 {
 
 include ('dbcon.php');
 date_default_timezone_set("Asia/Kolkata");
 $now=date("Y-m-d");
 if ($con->connect_error) {
                              die("Connection failed: " . $con->connect_error);
                              }

                              $sql ="UPDATE `car_info` SET `car_booked`=0 WHERE `End_Date`< '$now'";
                              
                              if (mysqli_query($con,$sql) === TRUE) {
                               
                              } else {
                                echo "0 results";
                              }

 
                             ?>
<?php include('top.php') ?>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <div class="w3-display-bottomleft w3-padding-large bg-img"><br><br>
    
  <h1 style="font-family: Copperplate, Arial;  margin-left: 25%; "><b>Rent cars by the hour with Varsu Rentals</b></h1>
  <h3 style="font-family: Lucida Bright; margin-left: 35%;"><b>Flexible packages at affordable prices</b></h3><br><br>
  <form action="form1.php" method="post" class="container">
    <h3 style="font-family:Times New Roman;"><b>&nbsp;&nbsp;One car many Destination</b></h3><br>

		 
			    <div class="input-group">
			      <span class="input-group-addon">Seats</span>
			      <input id="msg" type="text" class="form-control" name="Seats" placeholder="Enter No. of Seats..">
			    </div><br>
			     <div class="input-group">
			      <span class="input-group-addon">Price</span>
			      <input id="msg" type="text" class="form-control" name="price" placeholder="Enter Price Range..">
			    </div>
			  <br>

    <button type="submit" class="btn">Search Rental Cars</button>
  </form>

</div>
  
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/about.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="800">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" style="font-family: Copperplate, Arial;"><b>About Vasru</b></h1><br>
      <h5 class="w3-center">Tradition since 2000</h5>
      <p class="w3-large">    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <div><h1 style="font-size: 100px; font-family: Copperplate, Arial;"><b>VARSU</b></h1>
      	<h4 style="font-size: 35px;">Gonna be a while? Grab a Car rent</h4></div>
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="images/slogan.png" class="w3-round w3-image " alt="Menu" style="width:650px;  height: 350px;">
    </div>
  </div>



<!-- End page content -->
</div>

<?php include('bottom.php'); }
else
{
	echo'<script type="text/javascript">
	alert("Please Login your account first..");
   </script>';
   header('Location: login.php');
			exit();
		} ?>