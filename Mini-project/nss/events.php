<?php
   include("config.php");
   ?>
 <html>
 <head>
   <title>Events</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
 <style>
     
.container{
  margin-left: 1%;
  text-align: center;
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0.5s
}
     .button {
    align-content: center
}
     
     
     .button {
  background-color: #4CAF50; /* Green */
  border: none;
  box-shadow: 0 5px 10px 0px black;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button:hover{
  transition: 0.5s;
  box-shadow: none;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
 </style>
 </head>


     <body>

       <div class="w3-top" >
         <div class="w3-row w3-large w3-black">
           <div class="w3-col s3">
           <a href="profile.php" class="w3-button w3-block">Your profile</a>
           </div>
           </div>
         </div>
 </div>
   <br><br>
     


     <div class="container">
		<br>
         <button type="submit" class="button button3"><a href="blood.php"><h3>Register for Blood Donation Camp</h3></a></button>
		 <br>
         <button type="submit" class="button button2"><a href="beach.php"><h3>      Register for Cleanup Drive</h3></a></button>
         <br>
		 <button type="submit" class="button button1"><a href="marathon.php"><h3>    Register for Plantation Event </h3></a></button>
         <br>

<?php
// Select data from the table
$sql = "SELECT * FROM new_events";
$result = mysqli_query($db,$sql);

if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
<button type="submit" class="button button3"><a href="newevent.php"><h3> Register for <?php echo $row["name"];?> Event </h3></a></button>
<br>
<?php  }
} else {
}
?>
</body>
</html>
