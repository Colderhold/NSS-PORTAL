<?php
   include('session1.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>DONATION AMOUNT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ffff;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  transition: 0.5s;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
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
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.card {
  box-shadow: 0 4px 8px 0 black;
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.card:hover{
  transition: 0.2s;
  box-shadow: 0 4px 8px 0 grey;
}
.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #4CAF50;
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


.button {
  border: none;
  outline: 0;
  margin-left: 30px;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #ddd;
  box-shadow: 0 2px 4px 0 black;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  transition: 0.2s;
  color: lightgreen;
}
</style>
</head>
<body>
  <div class="w3-top">
    <div class="w3-row w3-large w3-black">
      <div class="w3-col s3">
     <a href="profile.php" class="w3-button w3-block">Your Profile</a>
     </div>
    </div>
  </div>

  <br>
  <br>

 <br><br><br>
     <br><br>

     <div class="card">
    <form  action='' method='post' style="border:1px solid #ccc">
      <div class="container" >
      <p style="font-weight: bold;">Enter your donation amount</p>
      <hr></div>


       <div class="col-25">
      <input type="text" name="maths"   placeholder="Enter your donation" patter='[0-9]{2-7}'><br>
    </div>

       


         <div class="clearfix">

        <button type="submit" class="signupbtn" name='submit' style="margin-left: 70px; background-color: green">Donate</button>
      </div>


         </form>




    </div>
            </body>
            </html>
<?php



 	$maths_marks = false;
	if(isset($_POST['maths'])){
    $maths_marks = $_POST['maths'];
    header("Location: https://forms.gle/Ycaf7xGsPZKXvYGG6");
 	}
 	$sql= "UPDATE maths_marks SET maths_marks= '$maths_marks' WHERE id='$login_session' ";

 	if(mysqli_query($db, $sql)){

	} else {
    echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
	}


	mysqli_close($db);


?>
