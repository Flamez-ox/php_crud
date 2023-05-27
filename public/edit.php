<?php require_once('../private/connect.php');

$id=$_REQUEST['id'];
$query = "SELECT * from users where id='".$id."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kbc edit form</title>
</head>
<body>
    <header>
        <ul style="list-style: none; display:flex; padding:20px;">
            <li><a style="text-decoration:none; padding:10px; margin-bottom:20px" href="table.php">Go back Table</a></li>
            <li><a style="text-decoration:none;" href="form.php">Registration form</a></li>
        </ul>
    </header>
    <div class="container-fluid align-items-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <b>Update the Form</b>
                    </div>
                    <div style="background-color:whitesmoke;" class=" card-body">
                        <form method="post" action="update.php">

                        <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="text" class="form-control" value="<?php echo $row['fname'];?>" name="fname" id="exampleFormControlInput1" placeholder="First Name" required>
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="text" name="lname" value="<?php echo $row['lname'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Last Name" required>
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="email" value="<?php echo $row['email'];?>" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1" class="form-label">About Yourself</label>
                                <textarea name="about" value="" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?php echo htmlspecialchars($row['about']);?></textarea>
                            </div> 
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">Show on Table?</label>
                                
                                <select name="show_on_table" aria-label="Default select example" class="form-select" required>
                                    <option  value="Show" <?php if ($row['show_on_table'] == 'Show' ): ?> selected="selected" <?php endif; ?>>Show</option>
                                    <option  value="Hide" <?php if ($row['show_on_table'] == 'Hide' ): ?> selected="selected" <?php endif; ?>>Hide</option>
                                </select>
                                
                            </div>
                            <br>
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div> 
            <div class="col-md-3"></div>
        </div>    
    </div>
        




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

