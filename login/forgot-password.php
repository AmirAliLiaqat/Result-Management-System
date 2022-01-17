<?php
    require '../main-files/conn.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($email, $code) {
        require '../PHPMailer/Exception.php';
        require '../PHPMailer/PHPMailer.php';
        require '../PHPMailer/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                                         //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                          //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                      //Enable SMTP authentication
            $mail->Username   = 'amirliaqat2020@gmail.com'; //SMTP username
            $mail->Password   = '03004371076';                    //SMTP password
            $mail->SMTPSecure = 'ssl';                                //Enable implicit TLS encryption
            $mail->Port       = 465; 
            
            // $mail->SMTPDebug       = 2; 
            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('amirliaqat2020@gmail.com', 'Amir Liaqat');

            $mail->addAddress($email);     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Password Reset Link From Amir Liaqat';
            $mail->Body    = "We got a request from you to reset your password! <br>
                Click the link below: <br>
                <a href='http://localhost/result-management-system/login/verify-email.php?email=$email&code=$code'>
                Reset Password.
                </a>";
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    // if forgot button will clicked...
    if(isset($_POST['forgot_password'])) {
        $email = $_POST['email'];
        
        $check_email = mysqli_query($conn, "SELECT * FROM `student-accounts` WHERE email = '$email'");

        if(mysqli_num_rows($check_email) > 0) {
            $code = rand(999999,111111);
            $updateQuery = "UPDATE `student-accounts` SET code = $code WHERE email = '$email'";
            $updateResult = mysqli_query($conn, $updateQuery);


            // if query run...
            if(mysqli_query($conn, $updateQuery) && sendMail($_POST['email'], $code)) {
                exit();
                echo " <div class='row'>
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong class='mx-4'>Password reset link has been sent to your email...</strong>.
                        <button type='button' class='btn-close mx-4' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>";
                header('location: login.php');
            } else {
                echo " <div class='row'>
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong class='mx-4'>Server down! try again later...</strong>.
                        <button type='button' class='btn-close mx-4' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>";
            }
        } else {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong class='mx-4'>Email cannot exist in our database...</strong>.
                    <button type='button' class='btn-close mx-4' data-bs-dismiss='alert' aria-label='Close'></button>
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
    <title>Forgot Password - Result Management System</title>
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
                <h1 class="text-center fst-italic">Forgot Password</h1>
                    <form action="" method="post">
                        <div class="col-md-12 my-5">
                            <label for="validationDefaultUsername" class="form-label">Enter Your Email :</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                <input type="text" class="form-control" name="email" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="e.g myemail@gmail.com" required>
                            </div><!--input-group-->
                        </div><!--col-md-12-->
                        <div class="submit_button text-center">
                            <button type="submit" class="btn btn-primary w-50" name="forgot_password" style="border-radius:30px">Submit</button>
                        </div><!--submit_button-->
                    </form>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
    
    <script src="script.js"></script>

    <?php include '../footer.php'; ?>

</body>
</html>