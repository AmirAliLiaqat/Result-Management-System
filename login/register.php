<?php
    require '../main-files/conn.php';
    require '../main-files/messages.php';

    if(isset($_POST['save'])) {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $code = rand();

        $checkEmail = "SELECT * FROM `student-accounts` WHERE email = '$email'";
        $query = mysqli_query($conn, $checkEmail) or die("Query Failed");

        if(strlen($firstName) >= 3 && strlen($firstName) < 20 && strlen($lastName) >= 3 && strlen($lastName) < 20) {
           if(!mysqli_num_rows($query) > 0) {
                if(strlen($password) > 8 && strlen($password) < 20) {
                    if($password === $cpassword) {
                        $sql = "INSERT INTO `student-accounts`(`first_name`, `last_name`, `email`, `password`, `code`) 
                        VALUES ('$firstName','$lastName','$email', md5('$password'), md5('$code'))";
                        $result = mysqli_query($conn, $sql) or die("Query Failed");

                        echo " <div class='row'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>Data Inserted Successfully...</strong>.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>";
                    } else {
                        echo " <div class='row'>
                            <div div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Password does't match...</strong>.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>";
                    }
                } else {
                    echo " <div class='row'>
                        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            <strong>Password must be between 8 characters and 20 characters...</strong>.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>";
                }
           } else {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email already exists in our database...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
           } 
        } else {
            echo " <div class='row'>
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Name must be between 3 characters and 20 characters...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
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
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
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
                        <input type="password" name="password" id="id_password" class="form-control" style="position: relative;" value="" required>
                        <i class="far fa-eye"  id="togglePassword" style="margin-left: 510px; margin-top: -25px; cursor: pointer; position: absolute;"></i>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="cpassword" class="form-label"><b>Confirm Password :</b></label> <br>
                        <span>Length must be between 8 characters and 20 characters.</span>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="password" name="cpassword" id="id_cpassword" class="form-control" style="position: relative;" value="" required>
                        <i class="far fa-eye"  id="toggleCpassword" style="margin-left: 510px; margin-top: -25px; cursor: pointer; position: absolute;"></i>
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

    <script src="script.js"></script>

    <?php include '../footer.php'; ?>

</body>
</html>