<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password - Result Management System</title>
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
                <h1 class="text-center fst-italic">Update Password</h1>
                    <form action="" method="post">
                        <div class="col-md-12 my-5">
                            <label for="password" class="form-label">New Password :</label>
                            <input type="password" class="form-control" name="password" id="id_password" required>
                        <i class="far fa-eye"  id="togglePassword" style="margin-left: 460px; cursor: pointer;"></i> <br>
                            <label for="password" class="form-label my-2">Confirm Password :</label>
                            <input type="password" class="form-control" name="cpassword" id="id_cpassword" required>
                        <i class="far fa-eye"  id="toggleCpassword" style="margin-left: 460px; cursor: pointer;"></i>
                        </div><!--col-md-12-->
                        <div class="submit_button text-center">
                            <button type="submit" class="btn btn-primary w-50" name="update_password" style="border-radius:30px">Update</button>
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