<?php
include('connection.php');

if(isset($_POST['submit']))
{
    $p_id = $_POST['p_id'];
    $user_id = $_POST['user_id'];
    $first_name = $_POST['name'];
    $last_name = $_POST['lname'];
    $check_in = $_POST['datei'];
    $check_out = $_POST['dateo'];
    $select_package = $_POST['select_package'];
    $adults = $_POST['adults'];
    $child = $_POST['child'];
    $room = $_POST['room'];
    $service = $_POST['service'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
   
    $query = "UPDATE package_booking SET first_name='$first_name',`last_name`='$last_name',`check_in`='$check_in',`check_out`='$check_out',`select_package`='$select_package',`adults`='$adults',`child`='$child',`room`='$room',`service`='$service',`email`='$email',`mobile`='$mobile' WHERE p_id='$p_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
       
        $_SESSION['message'] = "package updated succesfully";
        header('Location: your-booking.php?p_id='.$p_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "package not added succesfully";
        header('Location: edited-package-booking.php?p_id='.$p_id);
        exit(0);
    }
}



?>