<?php
    require '../main-files/conn.php';

    if(isset($_POST['update'])) {
        $id = $_GET['id'] ;
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if(strlen($password) > 3 && strlen($password) < 20) {
            if($password === $cpassword) {
                $sql = "UPDATE `student-accounts` SET `first_name` = '$firstName', `last_name` = '$lastName', `email` = '$email', `password` = md5('$password') WHERE id = $id";
                mysqli_query($conn, $sql) or die("Query Failed" . mysqli_connect_error($sql));
                
                header('location: welcome.php');
            } else {
                echo " <div class='row'>
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password does't match...</strong>.
                        <button type='button' class='btn-close mx-2' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>";
            }
        } else {
            echo " <div class='row'>
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Password must be between 8 characters and 20 characters...</strong>.
                    <button type='button' class='btn-close mx-2' data-bs-dismiss='alert' aria-label='Close'></button>
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
    <title>Edit Student - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

    <?php require 'header.php'; ?>

    <!-------------------- Section Start -------------------->
    <section style="overflow:hidden">
        <main>
            <div class="container-fluid p-0">
                <div class="row p-5">
                    <div class="col-md-12">
                        <h3 class="text-center text-uppercase fst-italic py-3" style="color:blue">Edit Student</h3>
                        <?php
                            $id = $_GET['id'];

                            if(isset($_GET['id'])) {
                                $sql = "SELECT * FROM `student-accounts` WHERE id = $id";
                                $result = mysqli_query($conn, $sql) or die("Query Failed");

                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <form action="" method="post">
                            <div class="row px-3 py-2">
                                <div class="col-md-4">   
                                    <label for="fname" class="form-label"><b>First Name :</b></label>
                                </div><!--col-md-4-->
                                <div class="col-md-6">
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>" required>
                                    <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name']; ?>" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row px-3 py-2">
                                <div class="col-md-4">   
                                    <label for="lname" class="form-label"><b>Last Name :</b></label> <br>
                                </div><!--col-md-4-->
                                <div class="col-md-6">
                                    <input type="text" name="lname" class="form-control" value="<?php echo $row['last_name']; ?>" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row px-3 py-2">
                                <div class="col-md-4">   
                                    <label for="email" class="form-label"><b>Email :</b></label> 
                                </div><!--col-md-4-->
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row px-3 py-2">
                                <div class="col-md-4">   
                                    <label for="currentPassword" class="form-label"><b>Current Password :</b></label>
                                </div><!--col-md-4-->
                                <div class="col-md-6">
                                    <input type="password" name="currentPassword" id="id_currentPassword" class="form-control" style="position: relative;" value="<?php echo $row['password']; ?>">
                                    <i class="far fa-eye"  id="togglecurrentPassword" style="margin-left: 535px; margin-top: -25px; cursor: pointer; position: absolute;"></i>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row px-3 py-2">
                                <div class="col-md-4">   
                                    <label for="password" class="form-label"><b>New Password :</b></label>
                                </div><!--col-md-4-->
                                <div class="col-md-6">
                                    <input type="password" name="password" id="id_password" class="form-control" style="position: relative;" value="">
                                    <i class="far fa-eye"  id="togglePassword" style="margin-left: 535px; margin-top: -25px; cursor: pointer; position: absolute;"></i>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row px-3 py-2">
                                <div class="col-md-4">   
                                    <label for="cpassword" class="form-label"><b>Confirm Password :</b></label>
                                </div><!--col-md-4-->
                                <div class="col-md-6">
                                    <input type="password" name="cpassword" id="id_cpassword" class="form-control" style="position: relative;" value="">
                                    <i class="far fa-eye"  id="toggleCpassword" style="margin-left: 535px; margin-top: -25px; cursor: pointer; position: absolute;"></i>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <button type="submit" class="btn btn-primary mx-3" name="update">Update</button>
                        </form>
                        <?php
                                    }
                                }
                            } 
                        ?>
                    </div><!--col-md-10-->
                </div><!--row-->
            </div><!--container-fluid-->
        </main>
    </section> 
    <!-------------------- Section End -------------------->

    <?php include '../footer.php'; ?>

    <!-------------------- Custom Js -------------------->
    <script src="script.js"></script>
    
</body>
</html>