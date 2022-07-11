<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - Animated Form</title>
  <head>
	<meta charset="UTF-8">
	<title>AnimaForm</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
  
  
  
<style>
*,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	margin: 0;
	font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
	
	background: linear-gradient(to bottom, #25665b 0%, black 100%);
}

.forms-section {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.section-title {
	font-size: 32px;
	letter-spacing: 1px;
	color: #fff;
}

.forms {
	display: flex;
	align-items: flex-start;
	margin-top: 30px;
}

.form-wrapper {
	animation: hideLayer .3s ease-out forwards;
}

.form-wrapper.is-active {
	animation: showLayer .3s ease-in forwards;
}

@keyframes showLayer {
	50% {
		z-index: 1;
	}
	100% {
		z-index: 1;
	}
}

@keyframes hideLayer {
	0% {
		z-index: 1;
	}
	49.999% {
		z-index: 1;
	}
}

.switcher {
	position: relative;
	cursor: pointer;
	display: block;
	margin-right: auto;
	margin-left: auto;
	padding: 0;
	text-transform: uppercase;
	font-family: inherit;
	font-size: 16px;
	letter-spacing: .5px;
	color: #999;
	background-color: transparent;
	border: none;
	outline: none;
	transform: translateX(0);
	transition: all .3s ease-out;
}

.form-wrapper.is-active .switcher-login {
	color: #fff;
	transform: translateX(90px);
}

.form-wrapper.is-active .switcher-signup {
	color: #fff;
	transform: translateX(-90px);
}

.underline {
	position: absolute;
	bottom: -5px;
	left: 0;
	overflow: hidden;
	pointer-events: none;
	width: 100%;
	height: 2px;
}

.underline::before {
	content: '';
	position: absolute;
	top: 0;
	left: inherit;
	display: block;
	width: inherit;
	height: inherit;
	background-color: currentColor;
	transition: transform .2s ease-out;
}

.switcher-login .underline::before {
	transform: translateX(101%);
}

.switcher-signup .underline::before {
	transform: translateX(-101%);
}

.form-wrapper.is-active .underline::before {
	transform: translateX(0);
}

.form {
	overflow: hidden;
	min-width: 260px;
	margin-top: 50px;
	padding: 30px 25px;
  border-radius: 5px;
	transform-origin: top;
}

.form-login {
	animation: hideLogin .3s ease-out forwards;
}

.form-wrapper.is-active .form-login {
	animation: showLogin .3s ease-in forwards;
}

@keyframes showLogin {
	0% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
}

@keyframes hideLogin {
	0% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
}

.form-signup {
	animation: hideSignup .3s ease-out forwards;
}

.form-wrapper.is-active .form-signup {
	animation: showSignup .3s ease-in forwards;
}

@keyframes showSignup {
	0% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
}

@keyframes hideSignup {
	0% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
}

.form fieldset {
	position: relative;
	opacity: 0;
	margin: 0;
	padding: 0;
	border: 0;
	transition: all .3s ease-out;
}

.form-login fieldset {
	transform: translateX(-50%);
}

.form-signup fieldset {
	transform: translateX(50%);
}

.form-wrapper.is-active fieldset {
	opacity: 1;
	transform: translateX(0);
	transition: opacity .4s ease-in, transform .35s ease-in;
}

.form legend {
	position: absolute;
	overflow: hidden;
	width: 1px;
	height: 1px;
	clip: rect(0 0 0 0);
}

.input-block {
	margin-bottom: 20px;
}

.input-block label {
	font-size: 14px;
  color: #a1b4b4;
}

.input-block input {
	display: block;
	width: 100%;
	margin-top: 8px;
	padding-right: 15px;
	padding-left: 15px;
	font-size: 16px;
	line-height: 40px;
	color: #3b4465;
  background: #eef9fe;
  border: 1px solid #cddbef;
  border-radius: 2px;
}

.form [type='submit'] {
	opacity: 0;
	display: block;
	min-width: 120px;
	margin: 30px auto 10px;
	font-size: 18px;
	line-height: 40px;
	border-radius: 25px;
	border: none;
	transition: all .3s ease-out;
}

.form-wrapper.is-active .form [type='submit'] {
	opacity: 1;
	transform: translateX(0);
	transition: all .4s ease-in;
}

.btn-login {
	color: #fbfdff;
	background: #25665b;
	transform: translateX(-30%);
}

.btn-signup {
	color: #fbfdff;
	background: #25665b;
	box-shadow: #25665b;
	transform: translateX(30%);
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <section class="forms-section">
  <h1 class="section-title">Admin</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Admin Login
        <span class="underline"></span>
      </button>
      <form class="form form-login" method = 'post'>
        <fieldset>
          <legend>Enter admin ID</legend>
          <div class="input-block">
            <label for="ad">Admin ID</label>
            <input type="number" name="ad" required>
          </div>
          <div class="input-block">
            <label for="password">Password</label>
			<input type="password" name="password" required>
          </div>
        </fieldset>
        <button type="submit" name="Login" value="Login" class="btn-login">Login</button>
      </form>
    </div>
	<?php





if(isset($_POST['Login']))
{
$conn = mysqli_connect("localhost","root","","student_det");
if(! $conn){
die("Couldn't connect".mysqli_connect_error());}
$ad=$_POST['ad'];
$pwd=$_POST['password'];
if($ad!=''&&$pwd!='')
{
$query=mysqli_query($conn,"select * from admin_pw where admin_id='$ad' and pass='$pwd'");
$res=mysqli_fetch_row($query);
if($res)
{
echo "<script>window.open('admin_option.html','_self')</script>";
}
else
{
echo"<script>alert('You entered username or password is incorrect')</script>";
}
}
else
{
echo"<script>alert('Enter both password and username')</script>";
}
}
?>
	    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Admin Sign Up
        <span class="underline"></span>
      </button>
      <form class="form form-signup" method="post">
        <fieldset>
          <legend>Enter details for sign up.</legend>
		  <div class="input-block">
            <label for="ad">Admin ID</label>
            <input name="ad" type="number" required>
          </div>
          <div class="input-block">
            <label for="mail">E-mail</label>
            <input name="mail" type="email" required>
          </div>
          <div class="input-block">
            <label for="password">Password</label>
            <input name="password" type="password" required>
          </div>
          
        </fieldset>
        <button type="submit" name="signup" value="signup" class="btn-login">Sign Up</button>
      </form>
    </div>
  </div>
  <?php







if(isset($_POST['signup'])){







$conn = mysqli_connect("localhost","root","","student_det");







if(! $conn){







die("Couldn't connect".mysqli_connect_error());}





$ad = $_POST['ad'];



$email = $_POST['mail'];



$pw = $_POST['password'];






$sql = "INSERT INTO admin_pw"."(admin_id,pass,email)". "VALUES('$ad','$pw','$email')";



$retval = mysqli_query($conn,$sql);



if(! $retval){



die("Couldn't enter details".mysqli_connect_error());}




echo "<script>alert('Data entered successfully')</script>";




mysqli_close($conn);




}



?>
  </section>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  
      <script id="rendered-js" >
const switchers = [...document.querySelectorAll('.switcher')];

switchers.forEach(item => {
  item.addEventListener('click', function () {
    switchers.forEach(item => item.parentElement.classList.remove('is-active'));
    this.parentElement.classList.add('is-active');
  });
});
//# sourceURL=pen.js
    </script>

  

</body>

</html>