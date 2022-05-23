<html>
    <head>
        <style>
            *{
    margin: 5;
    padding: 10;
    font-family: Arial, Helvetica, sans-serif;
}
#form_sec{
    border: 0.1px solid rgb(194, 193, 193);
    width: fit-content;
    height: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left:450px;
    margin-top:50px;
}
select{
    height: 45;
    width: 200;
    background-color: rgb(230, 228, 228);
    border: none;
    border-radius: 5px;
}
header{
    margin-left: 25px;
}
footer{
    margin-left: -10px;
}
footer input{
    width: 200px;
    background-color: rgb(113, 231, 252);
    border-radius: 5px;
}
select:required:invalid {
    color: #666;
}
        </style>    
    </head>

    <body>

        <?php
            $conn = mysqli_connect("localhost","root","","bikes");
            $s = 'SELECT * FROM brand';
            $r = mysqli_query($conn,$s);
        ?>

        <div id = "form_sec">
            <form method = post>
                <header><strong>Find Your Bike</strong></header>
                <select name="brand" required>
                <?php  while($rows = $r->fetch_assoc()){
                        $d = $rows['name'];
                        echo "<option value='$d'>$d</option>";
                }?>
    
                </select>
                <br>
                <select name="fueltype" required>
                    <option value="" disabled selected>Select Fuel Type</option>
                    <option>Diesel</option>
                    <option>Petrol</option>
                </select>
                <br>
                <footer><input type="submit" name="submit" value="submit"></footer>
                
            </form>
        </div>

    <?php
     
    session_start();

    if(isset($_POST["submit"])){
        
        $br = $_POST['brand'];
        $ft = $_POST['fueltype'];
        
        $_SESSION["sbrand"]= "$br";
        $_SESSION["sfueltype"]= "$ft";

        header('Location:search_bike.php');

    } 
     
     
    ?>

    </body>
</html>