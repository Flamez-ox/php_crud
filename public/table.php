<?php require_once('../private/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>kbc table </title>
</head>
<body>
<header>
        <ul style="list-style: none;">
            <li><a style="text-decoration:none; padding:20px;"href="form.php">Registration form</a></li>
        </ul>
    </header>
    <div class="container-fluid align-items-center">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        
                        <div  class="bg-success card-header">
                            <b> Visible User Table</b>
                        </div>
                        <div style="background-color:whitesmoke;" class=" card-body">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">About User</th>
                                            <th scope="col">About User</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $id = 1;
                                        $query = "SELECT * FROM `users`";
                                        $sql = $conn->query($query);
                                        while($row = mysqli_fetch_assoc($sql)) {
                                            
                                            if ($row["show_on_table"] == 'Show') {
                                        
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $id; $id++; ?></th>
                                            <td><?php echo $row["fname"]; ?></td>
                                            <td><?php echo $row["lname"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["about"]; ?></td>
                                            <td><?php echo $row["show_on_table"]; ?></td>
                                            <td>
                                                <a type="submit" class="btn btn-primary" href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                                <a onclick="confirmDelete()" href="delete.php?id=<?php echo $row["id"]; ?>" type="submit" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php }
                                       
                                            }

                                        
                                         ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                        <div class="bg-danger card-header">
                            <b>Hidden User Table</b>
                        </div>
                        <div style="background-color:whitesmoke;" class=" card-body">
                            <table id="yourFormId" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">About User</th>
                                            <th scope="col">About User</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $id = 1;
                                        $query = "SELECT * FROM `users`";
                                        $sql = $conn->query($query);
                                        while($row = mysqli_fetch_assoc($sql)) {
                                            
                                            if ($row["show_on_table"] == 'Hide') {
                                        
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $id; $id++; ?></th>
                                            <td><?php echo $row["fname"]; ?></td>
                                            <td><?php echo $row["lname"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["about"]; ?></td>
                                            <td><?php echo $row["show_on_table"]; ?></td>
                                            <td>
                                                <a type="submit" class="btn btn-primary" href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                                <a onclick="confirmDelete()" href="delete.php?id=<?php echo $row["id"]; ?>" type="submit" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php }
                                        }
                                         ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <div class="col-md-2"></div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function confirmDelete() {
    Swal.fire({
        title: '',
        text: "Diesen Eintrag wirklich löschen?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ja',
        cancelButtonText: 'Nein',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("yourFormId").submit();
        }
    })
}
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>