<?php 
    require '../main-files/conn.php'; 

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $stuId = $_POST['stuId'];
        $class = $_POST['class'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];

        $sql = "UPDATE `student-data` SET `student_id` = '$stuId', 
        `class` = '$class', `first_name` = '$firstName', `last_name` = '$lastName', `email` = '$email' WHERE id = $id";

        mysqli_query($conn, $sql) or die("Query Failed");

        header('location: display-data.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT - Result Management System</title>
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
                        <h3 class="text-center text-uppercase fst-italic pt-5" style="color:blue">Edit the student data</h3>
                        <?php

                            $id = $_GET['id'];

                            if(isset($_GET['id'])) {
                                $sql = "SELECT * FROM `student-data` WHERE id = $id";
                                $result = mysqli_query($conn, $sql) or die("Query Failed");

                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <form action="" method="post">
                            <div class="row m-2">
                                <div class="col-md-6">
                                    <label for="stuId" class="form-label">Student Id :</label>
                                    <input type="text" name="stuId" id="" class="form-control" value="<?php echo $row['student_id']; ?>" required>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <label for="class" class="form-label">Class :</label>
                                    <input type="text" name="class" id="" class="form-control" value="<?php echo $row['class']; ?>" class="form-control" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row m-2">
                                <div class="col-md-6">
                                    <label for="fname" class="form-label">First Name :</label>
                                    <input type="text" name="fname" id="" class="form-control" value="<?php echo $row['first_name']; ?>" required>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <label for="lname" class="form-label">Last Name :</label>
                                    <input type="text" name="lname" id="" class="form-control" value="<?php echo $row['last_name']; ?>" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row m-2">
                                <div class="col-md-12">
                                    <label class="form-label" for="email">Student Email :</label>
                                    <input type="email" name="email" id="" class="form-control" value="<?php echo $row['email']; ?>" required>
                                </div><!--col-md-12-->
                            </div><!--row-->
                            <div class="row m-2">
                                <h6 class="my-3"><b>Type the Numbers :</b></h6>
                                <div class="col-md-3">
                                    <label for="eng" class="form-label">English :</label>
                                    <input type="number" name="eng" id="" class="form-control" min="0" max="100" value="<?php echo $row['eng']; ?>" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="urdu" class="form-label">Urdu :</label>
                                    <input type="number" name="urdu" id="" class="form-control" min="0" max="100" value="<?php echo $row['urdu']; ?>" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="maths" class="form-label">Maths :</label>
                                    <input type="number" name="maths" id="" class="form-control" min="0" max="100" value="<?php echo $row['maths']; ?>" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="pak-study" class="form-label">Pak Study :</label>
                                    <input type="number" name="pak-study" id="" class="form-control" min="0" max="100" value="<?php echo $row['p.study']; ?>" required>
                                </div><!--col-md-3-->
                            </div><!--row-->
                            <div class="row m-2">
                                <div class="col-md-3">
                                    <label for="isl" class="form-label">Islamiyat :</label>
                                    <input type="number" name="isl" id="" class="form-control" min="0" max="100" value="<?php echo $row['isl']; ?>" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="phy" class="form-label">Physics :</label>
                                    <input type="number" name="phy" id="" class="form-control" min="0" max="100" value="<?php echo $row['phy']; ?>" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="chem" class="form-label">Chemistry :</label>
                                    <input type="number" name="chem" id="" class="form-control" min="0" max="100" value="<?php echo $row['chem']; ?>" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="bio" class="form-label">Biology :</label>
                                    <input type="number" name="bio" id="" class="form-control" min="0" max="100" value="<?php echo $row['bio']; ?>" required>
                                </div><!--col-md-3-->
                            </div><!--row-->
                            <div class="row m-2">
                                <div class="col-md-3">
                                    <label for="total" class="form-label">Total :</label>
                                    <input type="text" name="total" id="" class="form-control" value="<?php echo $row['total']; ?>">
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="obtain" class="form-label">Obtained :</label>
                                    <input type="text" name="obtain" id="" class="form-control" value="<?php echo $row['obtain']; ?>">
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="per" class="form-label">Percentage :</label>
                                    <input type="text" name="per" id="" class="form-control" value="<?php echo $row['percentage']; ?>">
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="grade" class="form-label">Grade :</label>
                                    <input type="text" name="grade" id="" class="form-control" value="<?php echo $row['grade']; ?>">
                                </div><!--col-md-3-->
                            </div><!--row-->
                            <button class="btn btn-primary mt-4 mx-4" type="submit" name="update" style="width:20%;">Update</button>
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

    <!-------------------- Bootstrap Js -------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
    <!-------------------- Custom Js -------------------->
    <script src="js/script.js"></script>

</body>
</html>