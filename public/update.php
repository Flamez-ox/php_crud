<?php require_once('../private/connect.php');

$id=$_REQUEST['id'];
$query = "SELECT * from users where id='".$id."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $email = $_REQUEST["email"];
    $about = $_REQUEST["about"];
    $show_on_table = $_REQUEST["show_on_table"];
    $update_date = date("Y-m-d");



    $sql = "UPDATE users SET fname = '$fname', lname = '$lname', email = '$email', about = '$about', show_on_table = '$show_on_table',
    updated_at = '$update_date' WHERE id = '$id'";  
 
        if ($conn->query($sql) === TRUE) {
            // header("Location: table.php");
            echo "<script>alert('Updated Successfully'); window.location.href='table.php';</script>";
            exit();
        } else {
            //   echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<script>alert('Error occured');</script>";
        }
        

}


?>