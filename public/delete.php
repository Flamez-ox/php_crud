<?php

 require_once('../private/connect.php');

 $id=$_REQUEST['id'];
$sql = "DELETE FROM users  WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    // header("Location: table.php");
    echo "<script>alert('Deleted Successfully'); window.location.href='table.php';</script>";
    exit();
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script>alert('Error occured');</script>";
}

$conn->close();