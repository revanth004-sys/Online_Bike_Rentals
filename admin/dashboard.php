<?php
$conn = mysqli_connect('localhost','root','','bikes');

$ct = "SELECT * FROM contact_us";
if ($r = mysqli_query($conn,$ct) ){
    $qcount = mysqli_num_rows($r);
}

$ct = "SELECT * FROM users";
if ($r = mysqli_query($conn,$ct) ){
    $usercount = mysqli_num_rows($r);
}

$ct = "SELECT * FROM brand";
if ($r = mysqli_query($conn,$ct) ){
    $bcount = mysqli_num_rows($r);
}

$ct = "SELECT * FROM booking";
if ($r = mysqli_query($conn,$ct) ){
    $count = mysqli_num_rows($r);
}

?>

<html>
    <head>
        <style>

*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: black;
    background-position: center;
    background-size: cover;
    height: 13vh;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: aliceblue;
    font-size: 35px;
    font-family:Georgia, 'Times New Roman', Times, serif;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}

            #facts {
  display:flex;
  justify-content:center;              
  background: #f7f7f7;
  padding: 80px 0 60px 0;
}

#facts .counters span {
  font-size: 48px;
  display: block;
  color: #2dc997;
}

#facts .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Poppins", sans-serif;
  font-size: 14px;
}

.section-header .section-title {
  font-size: 32px;
  color: #111;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
  margin-bottom: 5px;
}
h3{
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
}
table, th,td{
    border:3px solid black;
    padding: 10px;
    font-size: 50px;
    border-collapse : collapse;
}
.section-header .section-description {
  text-align: center;
  padding-bottom: 40px;
  color: #999;
}
        </style>   
    </head>
<body>    

<div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ADMIN</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="dashboard.php">DASHBOARD</a></li>
                    <li><a href="brand.php">BRANDS</a></li>
                    <li><a href="post_a_vehicle.php">VEHICLES</a></li>
                    <li><a href="manage_bookings.php">BOOKINGS</a></li>
                    <li><a href="manage_users.php">USERS</a></li>
                    <li><a href="manage_query.php">MANAGE_QUERY</a></li>
                </ul>
            </div>
        </div>     
    </div>

<section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Dashboard</h3>
          <p class="section-description"></p>
        </div>
        
            <div class="row counters">
               
  				<div class="col-lg-3 col-6 text-center">
                <table >
                  <tr>
                      
                      <td><p>Registered Users</p></td>
                      <td><span data-toggle="counter-up"><?php echo $usercount ?></span></td>
                    </div>
                </tr>    
                
                    <div class="col-lg-3 col-6 text-center">
                    <tr>    
                    <td><p>Bookings</p></td>
                    <td><span data-toggle="counter-up"><?php echo $count ?></span></td>
                    </div>
                    </tr>
                    <tr>
            <div class="col-lg-3 col-6 text-center">
              <td><p>Brands</p></td>
              <td><span data-toggle="counter-up"><?php echo $bcount ?></span></td>
            </div>
            </tr>
            <tr>
            <div class="col-lg-3 col-6 text-center">
                <td><p>Queries</p></td>
                <td><span data-toggle="counter-up"><?php echo $qcount ?></span></td>
            </div>
            </tr>
            
        </div>
        
    </div>
</section>
</body>
</html>    