<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email - Result Management System</title>
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
                <h1 class="text-center fst-italic">Verify Email</h1>
                    <form action="" method="post">
                        <div class="col-md-12 my-5">
                            <label for="code" class="form-label">Enter The Code :</label>
                            <input type="text" class="form-control" name="code" required>
                        </div><!--col-md-12-->
                        <div class="submit_button text-center">
                            <button type="submit" class="btn btn-primary w-50" name="verify_email" style="border-radius:30px">Verify</button>
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