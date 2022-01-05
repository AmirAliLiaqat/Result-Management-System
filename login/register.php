<?php
    require 'conn.php';
    require 'messages.php';

    if(isset($_POST['save'])) {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $checkEmail = "SELECT * FROM `student-accounts` WHERE email = '$email'";
        $query = mysqli_query($conn, $checkEmail) or die("Query Failed");

        if(strlen($firstName) >= 3 && strlen($firstName) < 20 && strlen($lastName) >= 3 && strlen($lastName) < 20) {
           if($query->num_rows >= 0) {
                if(strlen($password) > 8 && strlen($password) < 20) {
                    if($password === $cpassword) {
                        $sql = "INSERT INTO `student-accounts`(`first_name`, `last_name`, `email`, `password`) 
                        VALUES ('$firstName','$lastName','$email', md5('$password'))";
                        $result = mysqli_query($conn, $sql) or die("Query Failed");

                        echo "Data Inserted Successfully";
                    } else {
                        echo "Password does not matched";
                    }
                } else {
                    echo "Password must be at least greater to 8 character leas to 20 character";
                }
           } else {
               echo "Email already exist in our database";
           } 
        } else {
            // echo $strlength = 1;
            echo "Not strong string";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>

   <!-------------------- Section Start -------------------->
    <section>
        <div class="container my-5 p-2" style="background:#ccc; border-radius:15px">
            <form action="" method="post">
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="fname" class="form-label"><b>First Name :</b></label> <br>
                        <span>Length must be between 3 characters and 20 characters.</span>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="text" name="fname" class="form-control" value="" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="lname" class="form-label"><b>Last Name :</b></label> <br>
                        <span>Length must be between 3 characters and 20 characters.</span>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="text" name="lname" class="form-control" value="" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="email" class="form-label"><b>Email :</b></label> <br>
                        <span>Type your original email...</span>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="text" name="email" class="form-control" value="" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="password" class="form-label"><b>Password :</b></label> <br>
                        <span>Length must be between 8 characters and 20 characters.</span>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="password" name="password" class="form-control" value="" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="cpassword" class="form-label"><b>Confirm Password :</b></label> <br>
                        <span>Length must be between 8 characters and 20 characters.</span>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="password" name="cpassword" class="form-control" value="" required>
                    </div><!--col-md-6-->
                    <p class=" pt-4">
                        Already have an account ?
                        <a href="login.php" style="text-decoration: none; color:red;">Login.</a>
                    </p>
                </div><!--row-->
                <button type="submit" class="btn btn-primary mx-3" name="save">Register</button>
            </form>
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
    
    <?php include '../footer.php'; ?>

</body>
</html>