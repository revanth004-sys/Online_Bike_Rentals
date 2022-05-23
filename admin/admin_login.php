<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin_login_css.css">
</head>

<body>
    <div id="form">
        <form id="admin_login" method = post>
            <fieldset class = "fieldset">
                <legend>ADMIN LOGIN</legend>
                <div id=details_field>
                    <div id="input">
                        <input type="text" name="au" id="username" placeholder="Username" required><br>
                        <input type="password" name="ap" id="password" placeholder="Password" required><br>
                    </div>
                    <input type="submit" name="submit" value="login" id="submit">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>

<?php
session_start();
if(isset($_POST["submit"])){
$au = $_POST['au'];
$ap = $_POST['ap'];
$_SESSION['admin_user']=$au;
$conn = mysqli_connect('localhost','root','','bikes');
$s = 'SELECT * FROM admin';
$r = mysqli_query($conn,$s);
$c = 0;
if(mysqli_num_rows($r)>0){

    while($row = mysqli_fetch_assoc($r)){
       if($row["name"]==$au){
           if($row["password"]==$ap){
                   $c = $c+1;
           }
       }
        
    }
}
if($c>0){
   // $sql = "insert into details(username,password) VALUES('$u1','$p1')";
   // $result = mysqli_query($conn,$sql);
   header('Location:dashboard.php');}
else{
    alert('you are not an admin');}
}
?>