<?php

require_once('../private/connect.php');

if ($_POST["fname"] !== '' && $_POST["lname"] !== '' && $_POST["email"] !== '' && $_POST["about"] !== '' &&$_POST["show_on_table"] !== '') {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $about = test_input($_POST["about"]);
  $show_on_table = test_input($_POST["show_on_table"]);


  $sql = "INSERT INTO users (fname, lname, email, about, show_on_table)
VALUES ('$fname', '$lname', '$email', '$about', '$show_on_table')";


      if ($conn->query($sql) === TRUE) {
        // alert("Registration successful");
        // header("Location: table.php");
        echo "<script>alert('Registration successful'); window.location.href='table.php';</script>";
        exit();
      } else {
          echo "alert('Registration Error'): " . $sql . "<br>" . $conn->error;
      } 
}else{
  echo "<script> alert('Error occured'); window.location.href='form.php';</script>";
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

