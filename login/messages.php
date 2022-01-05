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
    
    <?php

        $success = 0;
        $danger = 0;
        $email = 0;
        $password = 0;
        $cpassword = 0;
        $login = 0;
        $logindetails = 0;
        $strlength = 0;
        $delete = 0;

        if($success) {
            echo " <div class='row'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Data Inserted Successfully...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
        if($danger) {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Data Can not be Inserted...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
        if($email) {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email already exists in our database...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
        if($password) {
            echo " <div class='row'>
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Password must be between 8 characters and 20 characters...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
        if($cpassword) {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Password does't match...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
        if($login) {
            echo " <div class='row'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Login Successfully...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
        if($logindetails) {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Login details is incorrect. Please try again...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
        if($strlength) {
            echo " <div class='row'>
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Name must be between 3 characters and 20 characters...</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
        if($delete) {
            echo " <div class='row'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Data Successfully Deleted.</strong>.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        }
    ?>

</body>
</html>