<?php
    require 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'] ;
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // $checkEmail = "SELECT * FROM `student-accounts` WHERE email = '$email'";
        // $query = mysqli_query($conn, $checkEmail) or die("Query Failed" . mysqli_connect_error());

        // if(!mysqli_num_rows($query) > 0) {
            if(strlen($password) > 3 && strlen($password) < 20) {
                if($password === $cpassword) {
                    $sql = "UPDATE `student-accounts` SET `first_name` = '$firstName', `last_name` = '$lastName', `email` = '$email', `password` = md5('$password') WHERE id = $id";
                    mysqli_query($conn, $sql) or die("Query Failed" . mysqli_connect_error($sql));
                    
                    header('location: admin.php');
                } else {
                    echo "Password does not matched";
                }
            } else {
                echo "Password must be at least greater to 8 character less to 20 character";
            }
        // } else {
        //     echo "Email already exist in our database";
        // }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>

   <!-------------------- Section Start -------------------->
    <section>
        <div class="container my-5 p-2" style="background:#ccc; border-radius:15px">
            <?php

                $id = $_GET['id'];

                if(isset($_GET['id'])) {
                    $sql = "SELECT * FROM `student-accounts` WHERE id = $id";
                    $result = mysqli_query($conn, $sql) or die("Query Failed");

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
            <form action="" method="post">
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="fname" class="form-label"><b>First Name :</b></label>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="text" name="id" class="form-control" value="<?php echo $row['id']; ?>" required>
                        <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name']; ?>" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="lname" class="form-label"><b>Last Name :</b></label>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="text" name="lname" class="form-control" value="<?php echo $row['last_name']; ?>" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="email" class="form-label"><b>Email :</b></label>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="currentPassword" class="form-label"><b>Current Password :</b></label>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="password" name="currentPassword" class="form-control" value="<?php echo $row['password']; ?>" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="password" class="form-label"><b>New Password :</b></label>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="password" name="password" class="form-control" value="" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="cpassword" class="form-label"><b>Confirm Password :</b></label>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="password" name="cpassword" class="form-control" value="" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <button type="submit" class="btn btn-primary mx-3" name="update">Update</button>
            </form>
            <?php
                        }
                    }
                } 
            ?>
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
    
    <?php include '../footer.php'; ?>

</body>
</html>