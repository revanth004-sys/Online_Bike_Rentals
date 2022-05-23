<?php
  session_start();
  if(!isset($_SESSION['sname'])){
    echo '<script type="text/javascript">alert("you have to login..")</script>';
    header('Location:login.php');
  }
?>

<html>
<head>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        aside{
            display:flex;
            align-items: center;
            width:20%;
            height: 100%;
            padding: 10px;

        }
        form{
            border: 1px solid black;
            display: flex;
            flex-direction: column;  
            padding:30px;   
            margin-left:450px;
            margin-top:50px;    
        }
        form h3{
            text-align: center;
        }
        form div{
            margin-top: 10px;
        }
        form input{
            margin-top: 10px;
        }

        input[type=submit]{
            background-color: aqua;
            font-size: medium;
            padding:3px;
        }
    
    </style>
</head>
<body>
    <aside>
        <form method=post>
            <h3>Book Now</h3>
            <div>
            <h4>from:</h4>
            <input type="date" name="fd" placeholder="from-date">
            </div>
            <div>
            <h4>to:</h4>
            <input type="date" name="td" placeholder="to-date">
            </div>
            <div>
            <input type="textarea" name="msg" placeholder="message">
            </div>
            <input type="submit" name="submit" value="book">
        </form>
    </aside>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","bikes");
if(isset($_POST["submit"])){

$fd = $_POST['fd'];
$td = $_POST['td'];
$msg = $_POST['msg'];
$id = $_GET["id"];
$nm = $_SESSION['sname'];
$d = date("Y/m/d");

$r = "select email from users where name='$nm'";
$r1 = mysqli_query($conn,$r);

if(mysqli_num_rows($r1)>0){
    while($row = mysqli_fetch_assoc($r1)){
        $em = $row['email']; 
        $sql = "insert into booking(name,email,vehicle_id,from_date,to_date,message,posting_date) VALUES('$nm', '$em', '$id', '$fd', '$td', '$msg' ,'$d')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo '<script type="text/javascript">alert("successfully booked")</script>'; 
        }

        else{
            header('Location:find_bike.php');
        }
    }
}

}
?>
