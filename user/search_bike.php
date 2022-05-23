<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'bikes');
$f = $_SESSION["sfueltype"];
$b = $_SESSION["sbrand"];
$s = "SELECT * FROM vehicle where vehicle_brand = '$b' and fuel_type= '$f' ";
$r = mysqli_query($conn, $s);
?>
<html>

<head>
    <link rel="stylesheet" href="search_bike.css">
</head>

<body>

<?php
if(mysqli_num_rows($r)>0){
    while($row = mysqli_fetch_assoc($r)){
?>
<div class="movie-card">

  <div class="container">
    
    <!--<a href="#"><?php //echo "<img src='admin/bike_models/".$row["bike_img"]."' height=50px width=50px>"?></a>-->
        
    <div class="hero">
            
      <div class="details">
      
        <div class="title1"><?php echo $row['vehicle_brand'] ?></div>

        <div class="title2"><?php echo $row['vehicle_name'] ?></div>    
        
      </div> <!-- end details -->
      
    </div> <!-- end hero -->
    
    <div class="description">
      
      <div class="column1">
      <a id="g" href="booking.php?id=<?php echo $row["id"]; ?>"><button type="submit"> Book  </button></a>
      </div> <!-- end column1 -->
      
      <div class="column2">
        
        <label>Overview: </label> <br><?php echo $row['vehicle_overview']?>
        <br>
        <label>Price: </label> <?php echo $row['price_per_day']?>
        <br>
        <label>Fuel Type: </label> <?php echo $row['fuel_type']?>
        <br>
        <label>Model Year: </label> <?php echo $row['model_year']?>
        <br>
        <label>Seating Capacity: </label> <?php echo $row['seating_capacity']?>
        <br>
        <label>Ground Clearence: </label> <?php echo $row['ground_clearence']?>
        <br>
        <label>Color: </label> <?php echo $row['color']?>
        <br>
        <label>Engine Capacity: </label> <?php echo $row['engine_capacity']?>
        <br>
        <label>Fuel Tank Capcity: </label> <?php echo $row['fuel_tank_capacity']?>
        <br>
        <label>Registration Date: </label> <?php echo $row['reg_date']?>
        <br>
        
        
        
      </div> <!-- end column2 -->
    </div> <!-- end description -->
    
   
  </div> <!-- end container -->
</div> <!-- end movie-card -->

<?php
    }
}
?>
</body>

</html>