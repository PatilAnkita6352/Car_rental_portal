<!DOCTYPE html>
<html>
<title>VARSU Car Rental</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 ,label{
  font-family: "Playfair Display";
  letter-spacing: 0px; 
}
hr
{
  background-color: #757575;
}
 
.bg-img {
  /* The image used */
  background-image: url("images/backg.png");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  left:60px;
  margin: 20px;
  max-width: 400px;
  padding: 16px;
  background-color: #EAEDED ;
  border-radius: 7px;
 
}

/* Full-width input fields *


/* Set a style for the submit button */
.btn {
  background-color: #CCFF33  ;
  color: black;
  padding: 7px 20px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.he
{
  display: inline-block;

}
/*Icons*/
.fa {
  padding: 7px;
  font-size: 15px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  background-color: black;
  border-radius: 50%;
  background: none;
  color: white;
}
.fa1
{
  padding: 7px;
  font-size: 15px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  background-color: black;
  border-radius: 50%;
  background: none;
  color: black;
}
.btn1
{
  float: right;
  background-color: #CCFF33  ;
  color: black;
   padding: 10px 30px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
  margin-top: -5px;
}

.dropdown-toggle
{
  width: 100%;
  border-radius: 10px;
  padding: 10px 30px;
  margin: 5px 0 10px 0;
  border: none;
  background: white;
  color: #757575;
}
</style>
<!-- Location css -->
  <style type="text/css">
    /* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}


.body1 {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}
.bg-img1 {
  /* The image used */
  background-image: url("images/book.jpg");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.bg-img3 {
  /* The image used */
  background-image: url("images/safeDrive.jpg");

  width:80%;
  height:80%;
  margin-left:10%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.h11 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  max-height: 100%;
  max-width: 100%;
  vertical-align: middle;
}

.btn2 {
  color: black;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid black;
  background: transparent;
}

.btn2:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
 background: #C8E751;
background: -webkit-linear-gradient(top, #C8E751, #FFFFFF);
background: -moz-linear-gradient(top, #C8E751, #FFFFFF);
background: linear-gradient(to bottom, #C8E751, #FFFFFF);

.card_title {
  color:black;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: black;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}
  </style>
  <script>
  function showAlert() {
    alert ("Your car has been successfully booked:)");
  }
  </script>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px; padding-top: 20px;">
   <img src="car_rent1.jpg" class="w3-bar-item " style="margin-left: 7px; height: 80px;" >

    <!-- Right-sided navbar links. Hide them on small screens -->
   
    <div class="w3-right w3-hide-small" style="font-size: 25px; ">
       <a  href="logout.php" class="w3-bar-item" style="float: right; margin-right: 10px;"><button type="button" class="btn1">Log out</button></a>
      <a href="Profile.php" class="w3-bar-item w3-button" style="float: right;">Profile</a>
      <a href="#about" class="w3-bar-item w3-button" style="float: right;">About</a>
      <a href="Main.php" class="w3-bar-item w3-button" style="float: right;">Home</a>
    </div>
  </div>
</div>
<div id="navbar">
  
  
  
</div><br><br><br><br>