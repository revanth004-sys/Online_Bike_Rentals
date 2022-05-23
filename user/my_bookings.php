<?php
session_start();
$conn = mysqli_connect('localhost','root','','bikes');
$n = $_SESSION["sname"];
$s = "SELECT * FROM booking where name = '$n' " ;
$r = mysqli_query($conn,$s);
?>
<html>
    <head>
    <style>
    *{
        margin: 0;
        padding:0;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    table{
        width: 50%;
        background: #262626;
        color: white;

    }
    table, th, td{
        border: 2px solid crimson;
        border-collapse : collapse;
    }
    th, td{
        padding : 9px;
        text-align:center;
    }
    table caption{
        font-size: 2rem;
        color: black;
    }
    table tr td a#g{
        text-decoration:none;
        color: green;
    }
    table tr td a#r{
        text-decoration:none;
        color: red;
    }
    table tr td a:hover{
        border-bottom: 1px solid white;
    }
    </style>
    
    <link href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" rel="stylesheet" >
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
      $('#t').DataTable();
    } );
    </script>

    </head>
    
    <body>
        
<?php
if(mysqli_num_rows($r)>0){
     
    echo "<table id='t'><caption>Bookings</caption><thead><tr><th>Vehicle-Id</th>  <th>From-date</th> <th>To-date</th> <th>Message</th> <th>status</th> <th>Posting-date</th> </tr></thead><tbody>";

    while($row = mysqli_fetch_assoc($r)){

        if($row["status"] == 1){
            $st = "confirmed";
        }
        else{
            $st = "Pending";
        }

        echo "<tr><td>".$row["vehicle_id"]."</td><td>".$row["from_date"]."</td> <td>".$row["to_date"]."</td> <td>".$row["message"]."</td> <td>".$st."</td> <td>".$row["posting_date"]."</td>";
        
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>
</body>
</html>