<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
     <title>Registeration</title>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body  {
  background-image: url("nss11.jpg");
  background-size: cover;
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
  border: 1px solid black;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: YELLOW;
  color: YELLOW;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  transition: 0.5s;
  opacity: 0.7;
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
.card { 
  border: solid 2px black;
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.card:hover{
  transition: 0.5s;
  box-shadow: 0 10px 20px 0 black;
}
.title {
  color: BLACK;
  font-size: 18px;
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

button:hover, a:hover {
  opacity: 0.7;
}


.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: RED;
  background-color: YELLOW;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: yellow;
}
</style>
</head>
<body>
  <div class="w3-top">
    <div class="w3-row w3-large w3-black">
      <div class="w3-col s3">
        <a href='index.html' class="w3-button w3-block">Home</a>
      </div>
         <div class="w3-col s3">
        <a href="contactus.html" class="w3-button w3-block">Contact us</a>
      </div>


      </div>


  </div>


  <div>
<br><br><br>
  </div>



<div class="card">
  <form method='post' style="border:1px solid #ccc">
  <div class="container" >
    <h2 style="font-weight: bold; font-size: 30px; color: black">Sign Up</h2>
    <hr>


     <div class="col-25">
		<input type="text" name="id" title='ENTER TWO DIGIT ID' pattern='[0-9]{2}'  placeholder="Enter your ID" required><br>
	</div>



     <div class="col-25">
<input type="text" name="name" title='ONLY ALPHABETS'  placeholder="Enter your name" required><br>
	</div>

      <div class="col-25" >
 <input type="text" placeholder="Enter Age" name="age" title='Enter two digit age' pattern='[0-9]{2}' required>	</div>


<div class="col-25">
    <input type="password" placeholder="Enter Password" name="password" required>





      </div>



    <div class="clearfix">

      <button type="submit" class="signupbtn" style="margin-left: 65px">Sign Up</button>
    </div>
  </div>

</form>
</div>



         <br><br>
 <div class="card" style="box-shadow: 5px 5px 10px #888888">



     <div style='padding: 10px; color: black; font-weight: bold'>                           Have an Account ?
         <a href='login.php' style='text-decoration:none; font-size: 16px; color:#00b8e6 ;'>Log in</a>
  </div>
      </div>
    <?php
    $id=filter_input(INPUT_POST,'id');
$name=filter_input(INPUT_POST,'name');

$age=filter_input(INPUT_POST,'age');



    $password=filter_input(INPUT_POST,'password');

if($age!=0){
$sql="INSERT INTO maths_marks (id, name, age,password) VALUES ('$id','$name','$age','$password')";
if(mysqli_query($db, $sql)){
    echo "Record was updated successfully.";

             header("location: login.php");

} else {
    echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
	}
  }
	mysqli_close($db);
?>
</body>
</html>
