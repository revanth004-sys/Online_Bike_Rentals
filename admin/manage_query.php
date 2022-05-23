<?php
$conn = mysqli_connect('localhost','root','','bikes');
$s = "SELECT * FROM contact_us";
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
        width: 40%;
        background: #262626;
        color: white;

    }
    table, th, td{
        border: 2px solid crimson;
        border-collapse : collapse;
    }
    th, td{
        padding : 9px ;
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

    #sidebar{
        background:#16171f;
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
    <body>
		
    
<?php
if(mysqli_num_rows($r)>0){
     
    echo "<table id='t'><caption>QUERIES</caption><thead><tr><th>NAME</th><th>EMAIL</th><th>CONTACT</th><th>MESSAGE</th> <th>POSTING_DATE</th></tr></thead><tbody>";

    while($row = mysqli_fetch_assoc($r)){
        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["message"]."</td><td>".$row["date"]."</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>
</body>
</html>