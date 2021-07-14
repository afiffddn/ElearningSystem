<?php 
require_once ("include/initialize.php");   
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?> 

<html>
	<head>
		<title> E-Learning || Log In </title>
		<link rel="shortcut icon" href="images/logo.png"/>
		<link rel="stylesheet" href="login.css">
	

	</head>
	<body style="background-image: url(images/2.jpg);">
	<div class="loginBox">
		
		<img src="images/1.png" class="user">
		<h2> E-Learning Unisel </h2>
		<form class="login100-form validate-form" action="" method="POST">
			<p>ID Number</p>
			<input type="text" name = "user_email" placeholder="Enter ID">
			<p>Password</p>
			<input type="password" name = "user_pass" placeholder="Enter Password">
			<input type="submit" name = "btnLogin" value="Sign In">
      <br><br>
			<a href="register.php"><center> Or Register Here  </center></a>
		</form>
	</div>
	
 <?php 

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect (web_root."loginnn.php");
         
    } else {  
      //it creates a new objects of member
        $student = new Student();
        //make use of the static function, and we passed to parameters
        $res = $student::studentAuthentication($email, $h_upass);
        if ($res==true) {  
             // redirect(web_root."index.php"); 

          echo $_SESSION['StudentID'];
        }else{
          message("Account does not exist! Please contact Administrator.", "error");
          redirect (web_root."loginnn.php");
        }
   }
 } 
 ?> 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>