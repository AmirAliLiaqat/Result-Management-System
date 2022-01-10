<?php
    require '../main-files/conn.php';
    require '../main-files/messages.php';

    // session_start();

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST["password"]);

        $check_email = mysqli_query($conn, "SELECT * FROM `student-accounts` WHERE email = '$email' AND password = '$password'");

        if(mysqli_num_rows($check_email) > 0) {
            if($email === 'amirliaqat2020@gmail.com') {
                header("Location: ../admin-panal/dashboard.php");
            } elseif($email === 'amirliaqat148@gmail.com'){
                header("Location: ../teacher-panal/dashboard.php");
            } else {
                $row = mysqli_fetch_assoc($check_email);
                // $_SESSION["user_id"] = $row['id'];
                // $_SESSION['full_name'] = $row['first_name'];
                header("Location: welcome.php");
                echo " <div class='row'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Login Successfully...</strong>.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>";
            }
        } else {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Login details is incorrect. Please try again...</strong>.
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
    <title>Login - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
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
                            <label for="email" class="form-label pt-2"><b>Email :</b></label>
                            <input type="text" name="email" class="form-control" placeholder="e.g my@gmail.com" value="" required>
                            <label for="password" class="form-label pt-2"><b>Password :</b></label>
                            <input type="password" name="password" id="id_password" class="form-control" value="" required>
                            <i class="far fa-eye"  id="togglePassword" style="margin-left: 460px; cursor: pointer;"></i>
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
    
    <script src="script.js"></script>

    <?php include '../footer.php'; ?>

</body>
</html>