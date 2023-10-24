<?php session_start(); 
 if(isset($_SESSION['username'])) 
 {?>
<?php include('top.php') ?>
<?php
$arr = array();
$arr=$_SESSION['arr'];

?>

<div class="con w3-display-container w3-content" style="max-width:1000px; min-height: 800px; ">
  <img class="w3-image" src="images/book.jpg" alt="The Hotel" style="min-width:1700px; margin-left: -175px;" width="1500" height="1000">
  <div class="w3-display-left w3-padding w3-col l8 m10" style="margin-left:50px;">
    <h1 style="font-family: Copperplate, Arial;  margin-left:15%; margin-right: 0%;"><b>Book A Car And Just Leave</b></h1>
  <br><br>
    <div class="w3-container" style="background-color: #CCFF33 ;">
      <h2><i class="fa fa-car w3-margin-right"  style="color: black;"></i>Booking Details</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="Booking.php" target="_blank" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
        	<div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-map-marker"  style="color: black;" required/></i> Location</label>
            <input class="w3-input w3-border" type="text" name="Location">
          </div>
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"  style="color: black;" required/></i> Duration</label>
            <input class="w3-input w3-border" type="number" value="1" name="Days" min="1" max="6">
          </div>
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"  style="color: black;" required/></i> Pick-Up</label>
            <input class="w3-input w3-border"  type="date" placeholder="DD MM YYYY" name="start_data" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"  style="color: black;" required/></i> Return</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="end_date" required>
          </div>
        </div>
        <button class="w3-button" style="background-color: #CCFF33 ; width:50%; border-radius: 10px; margin-left: 95px;" name="submit" type="submit"><i class="fa fa-search w3-margin-right" style="color: black;"></i> Search availability</button>
          
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>

<hr>
<!-- Footer -->

<?php include('bottom.php') ; }
else
{
  echo'<script type="text/javascript">
  alert("Please Login your account first..");
   </script>';
   header('Location: login.php');
      exit();
    } ?>