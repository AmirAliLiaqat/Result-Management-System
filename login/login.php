<?php
    require 'conn.php';
    require 'messages.php';

    session_start();

    if(isset($_POST['login'])) {
        $first_name = mysqli_real_escape_string($conn, $_POST['fname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

        $check_email = mysqli_query($conn, "SELECT * FROM `student-accounts` WHERE email = '$email' AND password = '$password' AND first_name = '$first_name'");

        if(mysqli_num_rows($check_email) > 0) {
            $row = mysqli_fetch_assoc($check_email);
            $_SESSION["user_id"] = $row['id'];
            // $_SESSION['full_name'] = $row['first_name'];
            header("Location: welcome.php");
        } else {
            echo "<script>alert('Login details is incorrect. Please try again...');</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>

   <!-------------------- Section Start -------------------->
    <section>
        <div class="container">
            <div class="row justify-content-center m-5">
                <div class="col-md-6 form-content">   
                <h1 class="text-center">Login</h1>
                        <form action="" method="post">
                            <label for="fname" class="form-label pt-2"><b>First Name :</b></label>
                            <input type="text" name="fname" class="form-control" placeholder="e.g my@gmail.com" value="" autofill="off" required>
                            <label for="email" class="form-label pt-2"><b>Email :</b></label>
                            <input type="text" name="email" class="form-control" placeholder="e.g my@gmail.com" value="" autofill="off" required>
                            <label for="password" class="form-label pt-2"><b>Password :</b></label>
                            <input type="password" name="password" class="form-control" placeholder="e.g 0123456789" value="" required>
                            <p align="right" class="mt-2"><a href="">Forgot Password</a></p>
                            <div class="captcha mb-2">
                                <p>Please check the box below to proceed.</p>
                                <img src="../images/captcha.png">
                            </div>
                            <p class="text-center pt-2">
                                Don't have an account ?
                                <a href="register.php" style="text-decoration: none; color:red;">Register.</a>
                            </p>
                            <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                        </form>
                </div><!--col-md-4-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
    
    <?php include '../footer.php'; ?>

</body>
</html>