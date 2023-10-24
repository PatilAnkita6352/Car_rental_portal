<!DOCTYPE html>
<html>
<title>Car Details</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body>

<!-- Navigation Bar -->

<!-- Header -->
<div class="con w3-display-container w3-content" style="max-width:1000px; margin-top:100px ;">
  <img class="w3-image" src="images/book.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container" style="background-color: #CCFF33  ;">
      <h2><i class="fa fa-car w3-margin-right"></i>Booking Details</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="Booking.php" target="_blank" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
        	<div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-map-marker"></i> Location</label>
            <input class="w3-input w3-border" type="text" name="Location"  >
          </div>
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Duration</label>
            <input class="w3-input w3-border" type="number" value="1" name="Days" min="1" max="6">
          </div>
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Pick-Up</label>
            <input class="w3-input w3-border"  type="date" placeholder="DD MM YYYY" name="start_data" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Return</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="end_date" required>
          </div>
        </div>
        <button class="w3-button w3-dark-grey" name="submit" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
          
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>


<!-- Footer -->

</body>
</html>
