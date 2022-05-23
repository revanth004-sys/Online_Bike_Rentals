<html>
    <head>
        <title>POST A VEHICLE</title>
        <style>
*{
    justify-content: center;
    padding: 5;
    margin: 8;
    border-radius: 1px;
    border-width: 2;
    border-color: rgb(7, 130, 238);
}

body{

    background : url('post.jpeg');
    background-repeat : no-repeat;
    background-size: cover;
    -webkit-backdrop-filter: blur(1px);
    backdrop-filter: blur(1px);

}

#total_form{
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, Helvetica, sans-serif;
    color: black;
    position: relative;
}
label{
    width:150px;
    display: inline-block;
    justify-content: left;
}
form{
    border: solid black;
    width: 600px;
    height: fit-content;
    background: darkgray;

}
header{
    display: flex;
    justify-content: center;
    font-size: 20px;
    border-radius: 5px;
    border-bottom: 2px solid black;
}
footer{
    display: flex;
    justify-content: center;
}
#submit{
    display: flex;
    justify-content: center;
    background-color: rgb(45, 212, 253);
    width: 200;
    height:fit-content;
}
        </style>
    
    <body>

        <?php
            $conn = mysqli_connect("localhost","root","","bikes");
            $s = 'SELECT * FROM brand';
            $r = mysqli_query($conn,$s);
        ?>
        <div id="total_form">
        <form method = post enctype="multipart/form-data">
            <header><strong>Post a Vehicle</strong></header>
            <div>

                <label>Vehicle Title:</label>
                <input type="text" name="name" id="name">
                <br> 

                <label for="brand">Select Brand</label>
                <select name="brand" id="brand">

                    <?php  while($rows = $r->fetch_assoc()){
                        $d = $rows['name'];
                        echo "<option value='$d'>$d</option>";
                    }?>
    
                </select>
                <br>

                <label>Vehicle Overview:</label>
                <textarea name="overview" id="overview" cols="30" rows="10"></textarea>
                <br>

                <label>Price Per day:</label>
                <input type="number" name="price" id="price">
                <br>

                <label for="fuel_type">Select fuel type: </label>
                <select name="fuel_type" id="fuel_type">
                    <option value="Petrol">Petrol</option>
                    <option value="Deisel">Deisel</option>
                    <option value="Electric">Electric</option>
                </select>
                <br>

                <label>Model Year:</label>
                <input type="number" name="year" id="year">
                <br>

                <label>Seat: </label>
                <select name="seat" id="seat">
                    <option value=1>One</option>
                    <option value=2>Two</option>
                </select>
                <br>

                <label>Mileage:</label>
                <input type="number" name="mil" id="mil">
                <br>
                
                <label>Ground Clearance:</label>
                <input type="text" name="clearence" id="clearence">
                <br>

                <label>Color:</label>
                <input type="text" name="color" id="color">
                <br>

                <label>Engine Capacity:</label>
                <input type="number" name="engine" id="engine">
                <br>

                <label>Fuel tank Capacity:</label>
                <input type="number" name="tank" id="tank">
                <br>


                <label for="img">Select image: </label>
                <input type="file" id="img" name="veh">
                <br>
                <input type="button" value="Add Another Image">
                <br>


                <footer>
                    <input type="submit" name="submit" value="Submit" id="submit">
                </footer>
            </div>
        </form>
    </div>

<?php
 
 $conn = mysqli_connect("localhost","root","","bikes");

 if(isset($_POST["submit"])){
 
 $nm = $_POST['name'];
 $brn = $_POST['brand'];
 $over = $_POST['overview'];
 $price = (int)$_POST['price'];
 $fuel = $_POST['fuel_type'];
 $year = (int)$_POST['year'];
 $seat = (int)$_POST['seat'];
 $mil = (int)$_POST['mil'];
 $clr = $_POST['clearence'];
 $color = $_POST['color'];
 $eng = (int)$_POST['engine'];
 $tank = (int)$_POST['tank'];

$path = "bike_models/";
$vn=$_FILES['veh']['name']; 
 $d = date("Y/m/d");
 $sql="INSERT INTO `vehicle`(`vehicle_name`, `vehicle_brand`, `vehicle_overview`, `price_per_day`, `fuel_type`, `model_year`, `seating_capacity`, `bike_img`, `mileage`, `ground_clearence`, `color`, `engine_capacity`, `fuel_tank_capacity`, `reg_date`, `updation_date`) VALUES('$nm', '$brn', '$over', $price, '$fuel', $year, $seat, '$vn', $mil, '$clr', '$color', $eng, $tank, '$d','$d')";
 $result = mysqli_query($conn,$sql);
 
 
if($result){
    move_uploaded_file($_FILES['veh']['tmp_name'], $path.$_FILES['veh']['name']);
    
    echo '<script type="text/javascript">alert("successfully updated")</script>';
}

 }
?>
</body>
</head>
</html>