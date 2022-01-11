<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile - Result Management System</title>
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
                <div class="row">
                    <div class="col-md-2">
                        <?php require 'sidebar.php'; ?>
                    </div><!--col-md-2-->
                    <div class="col-md-10">
                        <h3 class="text-center text-uppercase fst-italic pt-5" style="color:blue">View Profile</h3>
                        <?php
                            require '../main-files/conn.php';
                            $id = $_GET['id'];

                            if(isset($_GET['id'])) {
                                $sql = "SELECT * FROM `student-accounts` WHERE id = $id";
                                $result = mysqli_query($conn, $sql) or die("Query Failed");

                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <form action="" method="post">
                            <div class="row px-3 py-2">
                                <div class="col-md-6">   
                                    <label for="fname" class="form-label"><b>First Name :</b></label>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>" required>
                                    <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name']; ?>" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row px-3 py-2">
                                <div class="col-md-6">   
                                    <label for="lname" class="form-label"><b>Last Name :</b></label> <br>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <input type="text" name="lname" class="form-control" value="<?php echo $row['last_name']; ?>" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row px-3 py-2">
                                <div class="col-md-6">   
                                    <label for="email" class="form-label"><b>Email :</b></label> 
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row px-3 py-2">
                                <div class="col-md-6">   
                                    <label for="currentPassword" class="form-label"><b>Current Password :</b></label>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <input type="password" name="currentPassword" id="id_currentPassword" class="form-control" value="<?php echo $row['password']; ?>">
                                    <i class="far fa-eye"  id="togglecurrentPassword" style="margin-left: 470px; cursor: pointer;"></i>
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
    <script src="../login/script.js"></script>
    
</body>
</html>