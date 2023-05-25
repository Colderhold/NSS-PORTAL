<?php
   include('session.php');
?>
<html>
<DOCTYPE html>

<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


   <title>ADMIN</title>




<style>

body  {
  background-position-x: center;
  background-position-y: center;
  background-image: url("nss2.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}

    body {font-family: Arial, Helvetica, sans-serif;}{font-color:red;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: BLACK;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: WHITE;
  outline: none;
}

hr {
  border: 1px solid WHITE;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: red;
  color: red;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: WHITE;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content:"";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.card { border:none;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: BLACK;
  font-size: 20px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: BLACK;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: WHITE;
}

.a{
  display: inline-block;
  width: 49%;
  height: 100px;
}

.a1{
  display: inline-block;
  width: 49%;
  height: 100px;
}

button:hover, a:hover {
  opacity: 0.7;
}


.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: none;
}
    
    </style>

   </head>

   <body>




	<div class="w3-top">
     		    <div class="w3-row w3-large w3-black">
     		      <div class="w3-col s3">
     		        <a href="welcomea.php" class="w3-button w3-block">Admin Profile</a>
     		      </div>
				 </div>
	</div>

     <br><br>


   <body>
    <div class="container">
      <h1 style="font-weight: bold;font-size: 40px; color: white;"> Welcome <?php echo $login_session; ?></h1>
      <h2><a href = "logoutadmin.php" style="color: black;font-weight: bold; margin-left: 90%">Sign Out</a></h2>  
        
<div class="a"><button class="button button1"><a href="bloodr.php">View Blood Donation Camp registers</a></button></div>
<div class="a1"><button class="button button1"><a href="beachr.php">View Cleanup Drive Registrees</a></button></div>
<br><br><br>
<div class="a"><button class="button button1"><a href="marathonr.php">View Plantation Drive Registrees</a></button></div>
<div class="a1"><button class="button button1"><a href="addevent.php">Add an Event</a></button></div>
<br><br><br>
<div class="a"><button class="button button1"><a href="pastevents.php">View Past Activities</a></button></div>
<div class="a1"><button class="button button1"><a href="viewdonation.php">View All Donations</a></button></div>
<br><br><br>
<div class="a"><button class="button button1"><a href="viewall.php">View All Profiles</a><br></button></div>
<div class="a1"><button class="button button1"><a href="deleteid.php">Delete Profile</a></button></div>


      </div>

   </body>
</html>
