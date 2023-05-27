<?php require_once('../private/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kbc form</title>
</head>
<body>
    <header>
        <ul style="list-style: none;">
            <li><a style="text-decoration:none; padding:20px;"href="table.php">Check Table</a></li>
        </ul>
    </header>
    <div class="container-fluid align-items-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <b>Fill in the Form</b>
                    </div>
                    <div style="background-color:whitesmoke;" class=" card-body">
                        <form id="kbcform" method="post" action="formsubmit.php">
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="text" class="form-control" name="fname" id="exampleFormControlInput1" placeholder="First Name" required>
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="text" name="lname" class="form-control" id="exampleFormControlInput1" placeholder="Last Name" required>
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1" class="form-label">About Yourself</label>
                                <textarea name="about" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div> 
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1" class="form-label">Show on Table?</label>
                                <select name="show_on_table" aria-label="Default select example" class="form-select" required>
                                    <option  value="Show">Show</option>
                                    <option value="Hide">Hide</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
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