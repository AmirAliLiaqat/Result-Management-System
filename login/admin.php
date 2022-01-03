<?php 
    // require 'conn.php'; 
    // require 'messages.php'; 
    // require 'methods.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <!-------------------- Section Start -------------------->
    <section>
        <div class="container py-5">
            <button class="btn btn-primary text-center download mb-3">
                <a href="" class="text-decoration-none text-white">Download</a>
            </button>
            <div class="row bg-white pb-4">
                <div class="head bg-info text-primary py-3 mb-3">
                    <h1 class="text-center">Admin Panel</h1>
                </div><!--head-->
                <div class="col-md-12">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="text-center bg-dark text-white">
                                <th>Id</th>
                                <th>Fitst Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class = "text-center">
                                <td>1-</td>
                                <td>Amir</td>
                                <td>Ali</td>
                                <td>amirliaqat2020@gmail.com</td>
                                <td>amirliaqat2020</td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="delete.php" class="text-white" style="text-decoration:none;">Delete</a>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-primary">
                                        <a href="edit.php" class="text-white" style="text-decoration:none;">Edit</a>
                                    </button>
                                </td>
                            </tr>
                            <tr class = "text-center">
                                <td>1-</td>
                                <td>Amir</td>
                                <td>Ali</td>
                                <td>amirliaqat2020@gmail.com</td>
                                <td>amirliaqat2020</td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="delete.php" class="text-white" style="text-decoration:none;">Delete</a>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-primary">
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:none;">Edit</a>
                                    </button>
                                </td>
                            </tr>
                            <tr class = "text-center">
                                <td>1-</td>
                                <td>Amir</td>
                                <td>Ali</td>
                                <td>amirliaqat2020@gmail.com</td>
                                <td>amirliaqat2020</td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="delete.php" class="text-white" style="text-decoration:none;">Delete</a>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-primary">
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:none;">Edit</a>
                                    </button>
                                </td>
                            </tr>
                            <tr class = "text-center">
                                <td>1-</td>
                                <td>Amir</td>
                                <td>Ali</td>
                                <td>amirliaqat2020@gmail.com</td>
                                <td>amirliaqat2020</td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="delete.php" class="text-white" style="text-decoration:none;">Delete</a>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-primary">
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:none;">Edit</a>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
   
    <?php include '../footer.php'; ?>

</body>
</html>