<?php
include('connection.php');
error_reporting(0);

$p_id = $_GET['p_id'];
$query="DELETE FROM package_booking WHERE p_id='$p_id' ";	
$query_run = mysqli_query($conn, $query);

if($query_run)
{
    echo '<script> alert("deleted"); </script>';
    header("Location: your-booking.php");
}
else
{
    echo '<script> alert("not deleted"); </script>';
}
?>