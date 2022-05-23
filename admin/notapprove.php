<?php
$conn = mysqli_connect('localhost','root','','bikes');
$id = $_GET["id"];
$sql = "UPDATE booking SET status=0 WHERE id=$id ";
$res = mysqli_query($conn,$sql);

?>
<script type="text/javascript">
window.location="manage_bookings.php";
</script>