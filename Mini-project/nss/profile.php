<?php
include('session1.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>DONATOR'S PROFILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>  body  {

}


* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.flex-container {
  display: flex;
	overflow: hidden;

}
.flex-container>div {
   background-color:  #e6e6e6
;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
	width:33.3%;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.card {
  margin: 15px;
  box-shadow: 0 5px 10px 0 black;
  text-align: center;
  font-family: arial;
  overflow:hidden;
}

.card:hover{
	transition: 0.5s;
	box-shadow: none;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}



button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body style='background-color: #e6e6e6;'>


			<div class="w3-top">
		    <div class="w3-row w3-large w3-black">
					<div class="w3-col s3">
				 <a href="donation.php" class="w3-button w3-block">Donate Money</a>
			 </div>
			 <div class="w3-col s3">
      <a href="events.php" class="w3-button w3-block">Events </a>
    </div>



</div>
</div>

<br><br><br>
<?php
 	$sql=" SELECT * FROM maths_marks WHERE id='$login_session'";

	$result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


	$count = mysqli_num_rows($result);

	  if($count == 1){

			$x=$row['maths_marks'];
			$y=$row['eng_marks'];
			$total=$x+$y;


			$sql1="UPDATE maths_marks SET eng_marks='$total' WHERE id='$login_session'";
			 if(mysqli_query($db, $sql1)){



			} else {
		    echo "ERROR: Could not able to execute $sql1. "
		                            . mysqli_error($db);
			}
}
	else{
		echo "Wrong Id Entered";
	}
?>
<a href='logout.php'><h2 style='color:black; font-size: 20px; font-weight: bold; margin-left: 90%'>LOG OUT</h2></a>
<div class="flex-container">
  <div>

		<h2 style="text-align: left; margin-left: 50px; font-weight: bold">User Profile Card</h2>

		<div class="card" style='width:80%'>
		  <img src="64572.png" alt="John" style="width:100%">
			<div style='font-size:16px; background-color:beige'>
		  ID : <?php echo $row['id'];?><br>
			Username : <?php echo $row['name'];?><br>
			Age : <?php echo $row['age'];?>
		</div>


		</div>
	</div>
  <div>
		<h1 style="text-align:left; margin:15px; font-weight: bold">ACTIVITY</h1>

		<div class="card">
			<div style='font-size:16px;'>
				<h3 style= 'text-align: center;font-size:32px;border-bottom:1px solid black;background-color:#009973'>DONATIONS<h3>

				<p> Latest donation: Rs. <?php echo $row['maths_marks']?></p>
				<hr>
				<p>Total donation: Rs.<?php echo $total?></p>



		</div>


                    </div>
            </div>
      
  <div>

		<div style='margin-left:-70px; margin-top:82.5px'>


			<div class="card">
				<div style='font-size:16px;'>
					<h3 style= 'text-align: center;font-size:32px;border-bottom:1px solid black;background-color:#009973'>REGISTERED EVENTS<h3>

			<?php	if ($row['blood']=='Yes'){
				echo 'Blood Donation CAMP (10th DEC)';
			}
				?><hr>

			<?php	if ($row['beach']=='Yes'){
				echo 'Cleanup Drive (11th DEC)';
			}
	?><hr>
		<?php if ($row['marathon']=='Yes'){
				echo 'Plantation Drive (12th DEC)';
			}?><hr>
			
			<?php 
			// Select data from the table
			$sql = "SELECT * FROM new_events";
			$result = mysqli_query($db,$sql);
			
			if (mysqli_num_rows($result) > 0) {
			  // Output data of each row
			  while($row = mysqli_fetch_assoc($result)) {
				if ($row['register']=='Yes'){
					echo $row['name'];echo ' event on ' ;echo $row['date'];
				}
				else {
				}
			}
			}
			?>
			<?php

	?><?php 
	$sql=" SELECT * FROM maths_marks WHERE id='$login_session'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$sql1= "SELECT * FROM new_events";
	$result1= mysqli_query($db,$sql1);
	
	if(mysqli_num_rows($result1) > 0 ){
			while($row = mysqli_fetch_assoc($result)) {
		$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
		if ($row['blood']!='Yes' && $row['beach']!='Yes'&& $row['marathon']!='Yes' && $row1['register']!='Yes'){
			echo 'No upcoming events yet';
		}
	}
	}
	else{
}
	?>
			</div>


			</div></div>
	</div>
</div>


</body>
</html>
