<?php
   include('session1.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>PLANTATION</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
.card {
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.card:hover{
  box-shadow: 0 5px 10px 0 black;
  transition: 0.5s;
}
.container {
  padding: 16px;
}

    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
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
  opacity: 0.8;
}
.head{
  font-size:20px;
  width:50px;
}

select{
  width:200px;
  padding:5px;
  border:2px solid grey;
  border-radius: 5px;
}


</style>
</head>
<body>


  <body>

    <div class="w3-top" >
      <div class="w3-row w3-large w3-black">
        <div class="w3-col s3">
        <a href="profile.php" class="w3-button w3-block">Your profile</a>
        </div>
        </div>
      </div>
<div>
<br><br><br><br>
<div class="card">
<form  action='' method='post' style="border:1px solid #ccc">
 <div class="container" >

 
     <h2>Do you want to register for the Plantation Event ?</h2>
 <hr></div>

 
   <select id='register' name='register'>
     <option value='Yes'>YES</option>
     <option value='No'>NO</option>
   </select>





    <div class="clearfix">
   <button type="submit" class="signupbtn" name='submit'>CONFIRM YOUR REGISTERATION</button>
 </div>


    </form>
     </div>
</body>
</html>
<?php

 	$maths_marks = false;
	if(isset($_POST['register'])){
    $maths_marks = $_POST['register'];
    header("Location: profile.php");
 	}
 	$sql= "UPDATE maths_marks SET marathon= '$maths_marks' WHERE id='$login_session' ";

 	if(mysqli_query($db, $sql)){

	} else {
    echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
	}


	mysqli_close($db);



?>
