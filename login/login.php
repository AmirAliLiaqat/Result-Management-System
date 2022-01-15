<?php
    require '../main-files/conn.php';

    session_start();

    if(isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

        // setcookie ("email",$_POST["email"],time()+ 86400);
	    // setcookie ("password",$_POST["password"],time()+ 86400);

        $check_email = mysqli_query($conn, "SELECT * FROM `student-accounts` WHERE email = '$email' AND password = '$password'");

        if(mysqli_num_rows($check_email) > 0) {
            $row = mysqli_fetch_assoc($check_email);
            if($email === 'admin@gmail.com') {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['first_name'] = $row['first_name'];
                header("Location: ../admin-panal/dashboard.php");
            } elseif($email === 'teacher@gmail.com'){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['first_name'] = $row['first_name'];
                header("Location: ../teacher-panal/dashboard.php");
            } else {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['first_name'] = $row['first_name'];
                // $_SESSION['$_COOKIE["user_id"]'] = $row['id'];
                // $_SESSION['$_COOKIE["first_name"]'] = $row['first_name'];
                header("Location: welcome.php");
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
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                        <p align="right" class="mt-2"><a href="forgot-password.php">Forgot Password</a></p>
                        <div class="captcha mb-2">
                            <p>Please check the box below to proceed.</p>
                            <div class="g-recaptcha" data-sitekey="6Lf3YRQeAAAAAJymhp2AXO-UGI6m3CrqCvANxmQd"></div><!--g-recaptcha-->
                        </div><!--captcha-->
                        <p class="text-center pt-2">
                            Don't have an account ?
                            <a href="register.php" style="text-decoration: none; color:red;">Register.</a>
                        </p>
                        <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                    </form>
                </div><!--col-md-6-->
                <div class="col-md-6 my-auto">
                    <table class="w-100 text-center table-bordered table-hover">
                        <thead>
                            <tr><h5 class="text-center bg-info p-2 text-white fst-italic">‿︵‿︵ʚɞ Use These Emails  ʚɞ‿︵‿︵</h5></tr> 
                            <tr>
                                <th>Sr. No</th>
                                <th>Email</th>
                                <th>Password</th>
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
                            <tr>
                                <td class="p-1"> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td style="text-transform:lowercase"> <?php echo $row['first_name']; ?>2022</td>
                            </tr>
                        </tbody>
                        <?php
                                }
                            }
                        ?>
                    </table>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
    
    <script src="script.js"></script>

    <?php include '../footer.php'; ?>

</body>
</html>