<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>

<html>
	<head>
		<title> E-Learning || Register </title>
		<link rel="shortcut icon" href="logo.png"/>
		<link rel="stylesheet" href="register.css">
	

	</head>
	<body style="background-image:url(images/2.jpg);">
	<div class="loginBox">
		
		<img src="images/1.png" class="user">
		<h2> Registration Form </h2>
		<form action="register.php" method="POST">
			<input type="text" name = "FNAME" placeholder=" First Name ">
			<input type="text" name = "LNAME" placeholder=" Last Name ">
      <input type="text" name = "ADDRESS" placeholder=" Faculty Name ">
      <input type="text" name = "PHONE" placeholder=" Phone Number ">
      <input type="text" name = "USERNAME" placeholder=" Student ID ">
      <input type="password" name = "PASS" placeholder=" Password ">
			<input type="submit" name = "btnRegister" value=" Register ">
		</form>
	</div>
	</body>
</html>


<?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];  
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("login.php");

}

?> 