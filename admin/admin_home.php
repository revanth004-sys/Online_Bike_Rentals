<html lang="en">
<head>
    <title>Webpage Design</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}

.main{
    position:fixed;
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(ADM.jpeg);
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
    color: #00eeff70;
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
</body>
</html>