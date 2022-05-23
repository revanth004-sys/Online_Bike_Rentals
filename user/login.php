<!DOCTYPE html>
<head><title>login</title>
	<style>
		.loginbox{
position: absolute;
top: 20%;
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
	background-position: top;
}
.signupbox{
position: absolute;
top: 100%;
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
	<div class="loginbox">
	<div class="center">
		<h1>Login</h1>
		<form method="post">
			<div class="txt_field">
				<label>Username</label><br><br>
				<input type="text" name="nm" placeholder="Enter Username" required>
				<span></span>
			</div>
			<div class="txt_field">
				<label>Password</label><br><br>
				<input type="password" name="pw" placeholder="Enter Password" required>
				<span></span>
			</div>
			<div class="pass"><a href="signup.php">New User..?</a></div>
			<center><input type="submit" name="submit" value="login"></center>
		</form>


	</div>
</body>
</head>
</html>

<?php
session_start();
if(isset($_POST["submit"])){
$nm = $_POST['nm'];
$pw = $_POST['pw'];
$_SESSION["sname"]= "$nm";
$conn = mysqli_connect('localhost','root','','bikes');
$s = 'SELECT * FROM users';
$r = mysqli_query($conn,$s);
$c = 0;
if(mysqli_num_rows($r)>0){

    while($row = mysqli_fetch_assoc($r)){
       if($row["name"]==$nm){
           if($row["password"]==$pw){
                   $c = $c+1;
           }
       }
        
    }
}
if($c>0){
   // $sql = "insert into details(username,password) VALUES('$u1','$p1')";
   // $result = mysqli_query($conn,$sql);
   header('Location: login_home.php');
   
}
else{
    trigger_error("you are not an user");
}
}
?>