<?php 
 include('../include/function.php');
?>
<html>
 <head>
   <title>تسجيل الدخول</title>
   <meta charset="UTF-8">
   <!-- Start Bootstrap-->
    <link rel='stylesheet' href='../css/font-awesome.min.css'/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/bootstrap-rtl.min.css"/>
    <!--link rel="stylesheet" href="../css/style.css"/-->
    <!--End Bootstrap-->
   <link rel="stylesheet">
 </head>

 <body>
  <div class="container shadow text-white bg-white ">
   <div class="login shadow bg-danger">
    <h4 class="text-center ">تسجيل الدخول</h4>
	<form ACTION="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	<!--Start-->
	  <div class="form-group ">
	   <label for="name">البريد الإلكتروني</label>
	   <input type="text" name="name" class="form-control" id="name">
	  </div>
	<!--End-->
    <!--Start-->
	  <div class="form-group">
	   <label for="pass">كلمة السر</label>
	   <input type="password" name="pass" class="form-control" id="pass">
	  </div>
	<!--End-->
	<button class="btn btn-primary outline-light" name="login">تسجيل </button>
	</form>
   </div>
  </div>
<!--Bootstrap jQuery-->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<!--End Bootstrap jQuery-->
 </body>
</html>

<style>
body{
	background:#f9f8f8eb
   }
 .login{
	 margin:50px auto;
	 width:300px;
	 border-radius:10px;
	 border:1px solid red
 }
 .login h4{
	 padding:10px 
 }
 form{
	 margin:25px
 }
 form button{
	 margin-bottom:10px
 }
</style>