
<html>

<head>
    <title>Create brand</title>
    <style>

* {
    padding: 10;
    margin: 5;
    box-sizing: 20;
    border-color: rgb(7, 130, 238);
    border-radius: 5px;
    background:auto;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background : url('brands.jpeg');
    background-repeat : no-repeat;
    background-size: cover;
    -webkit-backdrop-filter: blur(1px);
    backdrop-filter: blur(1px);
}

#brand_name{
    block-size: 40px;
    text-size-adjust: 30 50;
}
#submit{
    background-color: black;
    color: white;
}
form{
    background: darkgrey;
    color:black;
    position:relative;
    justify-content: left;
    height: 300px;
    width: 600px;
    border: solid black;
}
header{
    color:black;
    display: flex;
    justify-content: left;
    font-size: 20px;
    border-radius: 5px;
    border-bottom: 2px solid black;
}
#total{
    top:200px;
}
#input{
    color:black;
}
    </style>    
</head>

<body>
    
    <div id='total'>
        <form method = post>
            <header>Create Brand</header>
            <div id="input">
                Brand Name<br>
                <input type="text" name="bnd" id="brand_name"><br>
                <input type="submit" name="submit" value="Submit" id="submit"><br>
            </div>
        </form>
    </div>
</body>

</html>

<?php
if(isset($_POST["submit"])){
$bnd = $_POST['bnd'];
$d = date("Y/m/d");
$conn = mysqli_connect("localhost","root","","bikes");
$sql = "insert into brand(name,creation_date) VALUES('$bnd','$d')";
$result = mysqli_query($conn,$sql);
if($result){
    echo '<script type="text/javascript">alert("successfully updated")</script>';
    //header('location:brand.php');
    }
}

?>