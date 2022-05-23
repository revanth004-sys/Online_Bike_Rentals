<?php
$conn = mysqli_connect('localhost','root','','bikes');
$s = "SELECT * FROM users";
$r = mysqli_query($conn,$s);
?>
<html>
    <head>

    
    <style>

*{
    margin: 0;
    padding: 0;
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
        padding : 3px 0;
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

    body{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .pt {
   
        margin-top:500px;
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
     
    echo "<table id='t'><caption>Registered Users</caption><thead><tr><th>NAME</th><th>EMAIL</th><th>CONTACT</th><th>Aadhar</th> <th>Driving_license</th> <th>POSTING_DATE</th> </tr></thead><tbody>";

    while($row = mysqli_fetch_assoc($r)){
        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td><img src='uploads/".$row["aadhar_img"]."' height=50px width=50px></td> <td><img src='driving/".$row["driving_lic_img"]."' height=50px width=50px></td> <td>".$row["reg_date"]."</td>";
        echo "</tr>";
        
    }
    echo "</tbody></table>";
}
?>

</body>
</html>