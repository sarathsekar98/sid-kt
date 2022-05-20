<?php
    include 'config.php';
    session_start();
    if(isset($_POST['enquire'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phno = mysqli_real_escape_string($con,$_POST['phone_number']);
        $city = mysqli_real_escape_string($con,$_POST['city']);
        $state = mysqli_real_escape_string($con,$_POST['state']);
        $tracker = mysqli_real_escape_string($con,$_POST['tracker']);
        $products = mysqli_real_escape_string($con,$_POST['products']);

        $sql = "INSERT INTO enquiry_form (name, email, phone, city, state, tracker, products) VALUES ('$name','$email','$phno','$city','$state', '$tracker', '$products')";
        if(mysqli_query($con, $sql)){
            header('location:thanks.html');
        }

    }

?>  