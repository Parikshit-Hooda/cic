<?php

  $country=$name=$address=$mobile=$email="";
  $count_err=$name_err=$add_err=$mob_err=$email_err="";
  if ($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST["country"])){
      $count_err="Country is required.";
    }else{
      $country=input($_POST["country"]);
    }

    if(empty($_POST["name"])){
      $name_err="Name is required.";
    }else{
      $name=input($_POST["name"]);
      if(!preg_match("/^[a-zA-Z]*$/",$name)){
        $name_err="Only letters and blank spaces allowed.";
      }
    }

    if(empty($_POST["address"])){
      $add_err="Address is required.";
    }else{
      $address=input($_POST["address"]);
      if(!preg_match("/^[a-zA-Z0-9]*$/",$address)){
        $add_err="No special character is allowed";
      }
    }

    if(empty($_POST["mobile"])){
      $mob_err="Mobile Number is required.";
    }else{
      $mobile=input($_POST["mobile"]);
      if(!preg_match("/^[0-9]*$/",$mobile)){
        $mob_err="Only letters and blank spaces allowed.";
      }
    }

    if(empty($_POST["email"])){
      $email_err="Email Address is required.";
    }else{
      $email=input($_POST["email"]);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_err="Invalid Email Address";
      }
    }


  }

  $snm="localhost";
  $user="root";
  $pass="Prince2398";

  $conn=new mysqli($snm,$user,$pass);

  $sql="CREATE DATABASE IF NOT EXISTS db";
  mysqli_query($conn,$sql);
  $sql="USE db";
  mysqli_query($conn,$sql);
  $sql="CREATE TABLE data (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                          country VARCHAR(50) NOT NULL,
                          name VARCHAR(50) NOT NULL,
                          address VARCHAR(100) NOT NULL ,
                          mobile VARCHAR(10) NOT NULL,
                          email VARCHAR(50) NOT NULL   )";
  mysqli_query($conn,$sql);

  $sql="INSERT INTO data(country,name,address,mobile, email) VALUES
                    ('$country','$name','$address','$mobile,'$email')";
  mysqli_query($conn,$sql);

  $from=$email;
  $subject="New query request";
  $body="New Entry :\n
          Country: $country\n
          Name: $name\n
          Address: $address\n
          Phn. No. : $mobile\n
          Email : $email";
  $to="princepiyush2398@gmail.com";
  $head="From : $from";

  mail($to,$subject,$body,$head);

  function input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }

?>
