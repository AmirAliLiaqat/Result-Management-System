<?php
    require 'conn.php';
    require 'messages.php';
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
                        <input type="text" name="fname" class="form-control" value="" pattern=".{3,20}" title="3 characters minimum" required>
                    </div><!--col-md-6-->
                </div><!--row-->
                <div class="row px-3 py-2">
                    <div class="col-md-6">   
                        <label for="lname" class="form-label"><b>Last Name :</b></label> <br>
                        <span>Length must be between 3 characters and 20 characters.</span>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <input type="text" name="lname" class="form-control" value="" pattern=".{3,20}" title="3 characters minimum" required>
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