<?php 
    require '../main-files/conn.php'; 

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $stuId = $_POST['stuId'];
        $class = $_POST['class'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];

        $sql = "UPDATE `student-data` SET `student_id` = '$stuId', 
        `class` = '$class', `first_name` = '$firstName', `last_name` = '$lastName', `email` = '$email' WHERE id = $id";

        mysqli_query($conn, $sql) or die("Query Failed");

        header('location: display-data.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Panal - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

    <?php require 'header.php'; ?>

    <!-------------------- Section Start -------------------->
    <section style="overflow:hidden">
        <main>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-2">
                        <?php require 'sidebar.php'; ?>
                    </div><!--col-md-2-->
                    <div class="col-md-10">
                        <h3 class="text-center text-uppercase fst-italic pt-5" style="color:blue">Users Panel</h3>
                        <div class="row px-3">
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
                                    <?php
                                        require '../main-files/conn.php';

                                        $sql = "SELECT * FROM `student-accounts`";
                                        $query = mysqli_query($conn, $sql) or die("Query Failed" . mysqli_connect_error());

                                        if(mysqli_num_rows($query) > 0) {
                                            while($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <tbody>
                                        <tr class = "text-center">
                                            <td> <?php echo $row['id']; ?> </td>
                                            <td> <?php echo $row['first_name']; ?> </td>
                                            <td> <?php echo $row['last_name']; ?> </td>
                                            <td> <?php echo $row['email']; ?> </td>
                                            <td> <?php echo $row['password']; ?> </td>
                                            <td>
                                                <button class="btn btn-danger">
                                                    <a href="delete-student.php?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:none;">Delete</a>
                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary">
                                                    <a href="edit-student.php?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:none;">Edit</a>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                            }
                                        }
                                    ?>
                                </table>
                                <a href="register-student.php" class="btn btn-info text-white">Add New User</a>
                            </div><!--col-md-12-->
                        </div><!--row-->
                    </div><!--col-md-10-->
                </div><!--row-->
            </div><!--container-fluid-->
        </main>
    </section> 
    <!-------------------- Section End -------------------->

</body>
</html>