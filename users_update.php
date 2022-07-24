<?php
  include "config.php";
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "./images/" . $filename;

  
  $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email', address='$address', filename='$filename' WHERE id='$id'";
  if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
    header("location: users.php");
  } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  if (move_uploaded_file($tempname, $folder)) {
      echo "บันทึกไฟล์เรียบร้อย";
  } else {
      echo "ไม่สามารถบันทึกไฟล์";
  }
 
mysqli_close($link);

?>