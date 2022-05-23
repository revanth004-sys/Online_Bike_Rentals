<!DOCTYPE html>
<head><title>Signup</title>
	<style>
		.loginbox{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 400px;
background: black;
color: whitesmoke;
border-radius: 10px;
}
.center{
position: absolute;
top: 55%;
left: 50%;
transform: translate(-50%, -50%);
width: 400px;
background: black;
border-radius: 10px;
margin-top: 200px;
}
.center h1{
text-align: center;
padding: 0 10 20px 0;
border-bottom: 1px solid silver;
}
.center form{
padding: 0 40px;
box-sizing: border-box;
}
form .txt_field{
position: relative;
border-bottom: 2px solid #adadad;
margin: 30px 0;
}
.txt_field input{
	width:  100%;
	padding:  0 5px;
	color: whitesmoke;
	height: 40px;
	font-size: 16px;
	border: none;
	background: none;
	outline: none;
}
.txt_file label{
	position: absolute;
	top: 50%;
	left: 5px;
	color: #adadad;
	transform: translate(-50%);
	font-size: 16px;
	padding: none;
	transition: .5s;
}
.txt_field span::before{
	content:'';
	position: absolute;
	top: 40px;
	left: 0;
	width: 100%;
	height: 2px;
	background:#FFA500;
	transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
	top: -5px;
	color:whitesmoke;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
	width: 100%;
}
.pass{
	margin: -5px 0 20px 5px;
	color: #FFA500;
	cursor: pointer;
}
.pass:hover{
	text-decoration: underline;
}
input[type="submit"]{
	width: 75%;
	height: 50px;
	border: 1px solid;
	background-color: blue;
	border-radius: 10px;
	font-size: 18px;
	color: black;
	font-weight: 700;
	cursor: pointer;
	outline: none;
}
input[type="submit"]:hover{
	border-color: #FFA500;
	transition: .5s;
}
body{
	background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(bike.jpg);
	height: 633px;
	width: 1536px;
	background-size: cover;
	background-size: 130%;
	background-position: top;
	background-repeat:no-repeat;
}
.signupbox{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 400px;
background: black;
color: whitesmoke;
border-radius: 10px;

}
.pass a{
	text-decoration: none;
    color: #FFA500;
}
	</style>
<body>
	<div class="signupbox">
	<div class="center">
		<h1>Signup</h1>
		<form method="post" action="signup.php" enctype="multipart/form-data">
			<div class="txt_field">
				<label>Username</label><br><br>
				<input type="text" required name="nm" placeholder="Enter Username">
				<span></span>
			</div>
			<div class="txt_field">
				<label>Email Id</label><br><br>
				<input type="text" required name="em" placeholder="Enter Email Id">
				<span></span>
			</div>

            <div class="txt_field">
				<label>Contact no</label><br><br>
				<input type="number" required name="cn" placeholder="Enter Contact no">
				<span></span>
			</div>

            <div class="txt_field">
				<label>Password</label><br><br>
				<input type="password"required name="pw" placeholder="Enter Password">
				<span></span>
			</div>
			<div class="txt_field">
				<label>Confirm Password</label><br><br>
				<input type="password" required name="cpw" placeholder="Confirm Password">
				<span></span>
			</div>

				<label>Aadhar-img</label><br><br>
				<input type="file" name="adh" required>

			    <br><br>

				<label>Driving-licence-img</label><br><br>
				<input type="file"  name="drv" required>
	             
				<br><br>
			<center><input type="submit" name="submit" value="signup"></center>
		</form>
		<?php

$conn = mysqli_connect("localhost","root","","bikes");

if(isset($_POST["submit"])){

$nm = $_POST['nm'];
$em = $_POST['em'];
$cn = $_POST['cn'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];


$d = date("Y/m/d");



if($pw == $cpw){
	$path = "admin/uploads/";
	$path2 = "admin/driving/";
	$fn=$_FILES['adh']['name'];
	$fn2=$_FILES['drv']['name'];
    $sql = "insert into users(name,email,contact,password,confirm_password,aadhar_img,driving_lic_img,reg_date) VALUES('$nm', '$em', '$cn', '$pw', '$cpw', '$fn' , '$fn2', '$d')";
}
$result = mysqli_query($conn,$sql);
    if($result){
		move_uploaded_file($_FILES['adh']['tmp_name'], $path.$_FILES['adh']['name']);
		move_uploaded_file($_FILES['drv']['tmp_name'], $path2.$_FILES['drv']['name']);   
    }
}

?>

	</div>
</body>
</head>
</html>

