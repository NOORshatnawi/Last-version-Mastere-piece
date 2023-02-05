<?php
include'./includes/connection.php';
 
  if(ISSET($_POST['update'])){
    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $appointment_date = $_POST['appointment_date'];
    $messages = $_POST['messages'];
    $user_case = $_POST['user_case'];

 
    mysqli_query($conn, 
    "UPDATE `users_appointments` SET `name` = '$name', `email` = '$email', `phone_num` = '$phone_num', `appointment_date` = '$appointment_date', `messages` = '$messages', `user_case` = '$user_case' 
    WHERE `id` = '$user_id'") 
    or die(mysqli_error());
 
    header("location: profile.php");
  }
?>