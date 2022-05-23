<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BIKE RENTALS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <a href="admin/admin_login.php"><h2 class="logo"><img src="rentals.png" width="150px" height="100px"></h2></a>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.html">ABOUT </a></li>
                    <li><a href="find_bike.php">BIKES</a></li>
                    <li><a href="contactus.php">CONTACT</a></li>

                </ul>
            </div>

            <div class="search">
                <a href="#"><button class="btn btn-warning"><?php echo $_SESSION["sname"]; ?></button></a>
                <a href="my_bookings.php"><button class="btn btn-warning">Bookings</button></a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Logout
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure. Do you want to logout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="location.href = 'logout.php';">Logout</button>
                    </div>
                    </div>
                </div>
                </div>
                            </div>

        </div> 
        <div class="content">
            <h1>Find Your Perfect<br><span>Bike</span></h1>
            <p class="par">we style your way with our bikes<br>
            Many models for you to choose<br>
            lets's give a ride...</p>

                <button class="cn"><a href="#">Read more</a></button>

                    </div>
                </div>
        </div>
    </div>
</body>
</html>