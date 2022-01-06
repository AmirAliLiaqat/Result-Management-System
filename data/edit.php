<?php 
    require 'conn.php'; 
    require 'methods.php'; 

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

        header('location: display.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>

   <!-------------------- Section Start -------------------->
    <section>
        <div class="container my-5 py-4" style="background:#ccc; border-radius:15px">
            <h1 class="text-center" style="text-transform:uppercase;">Edit the student data</h1>
            <div class="row justify-content-center">
               <div class="col-md-8">
                    <?php

                        $id = $_GET['id'];

                        if(isset($_GET['id'])) {
                            $sql = "SELECT * FROM `student-data` WHERE id = $id";
                            $result = mysqli_query($conn, $sql) or die("Query Failed");

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <form action="" method="post">
                        <div class="row my-2">
                            <div class="col-md-6">
                                <label for="stuId" class="form-label">Student Id :</label>
                                <input type="text" name="stuId" value="<?php echo $row['student_id']; ?>" class="form-control" placeholder="e.g 1190">
                            </div><!--col-md-6-->
                            <div class="col-md-6">
                                <label for="class" class="form-label">Class :</label>
                                <input type="text" name="class" value="<?php echo $row['class']; ?>" class="form-control" placeholder="e,g 9th, 10th, 1st">
                            </div><!--col-md-6-->
                        </div><!--row-->
                        <div class="row my-2">
                            <div class="col-md-6">
                                <label for="fname" class="form-label">First Name :</label>
                                <input type="text" name="fname" value="<?php echo $row['first_name']; ?>" class="form-control" placeholder="e.g Aslam">
                            </div><!--col-md-6-->
                            <div class="col-md-6">
                                <label for="lname" class="form-label">Last Name :</label>
                                <input type="text" name="lname" value="<?php echo $row['last_name']; ?>" class="form-control" placeholder="e,g Ali">
                            </div><!--col-md-6-->
                        <div class="row my-2">
                            <div class="col-md-12">
                            <label class="sr-only" for="inlineFormInputGroup">Student Email :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="e.g my@email.com">
                                </div>
                            </div><!--col-md-12-->
                        </div><!--row-->
                        <div class="row my-2">
                            <h6 class="my-3"><b>Type the Numbers :</b></h6>
                            <div class="col-md-3">
                                <label for="eng" class="form-label">English :</label>
                                <input type="number" name="eng" value="<?php echo $row['eng']; ?>" class="form-control" min="0" max="100">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="urdu" class="form-label">Urdu :</label>
                                <input type="number" name="urdu" value="<?php echo $row['urdu']; ?>" class="form-control" min="0" max="100">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="maths" class="form-label">Maths :</label>
                                <input type="number" name="maths" value="<?php echo $row['maths']; ?>" class="form-control" min="0" max="100">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="pak-study" class="form-label">Pak Study :</label>
                                <input type="number" name="pak-study" value="<?php echo $row['p.study']; ?>" class="form-control" min="0" max="100">
                            </div><!--col-md-3-->
                        </div><!--row-->
                        <div class="row my-2">
                            <div class="col-md-3">
                                <label for="isl" class="form-label">Islamiyat :</label>
                                <input type="number" name="isl" value="<?php echo $row['isl']; ?>" class="form-control" min="0" max="100">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="phy" class="form-label">Physics :</label>
                                <input type="number" name="phy" value="<?php echo $row['phy']; ?>" class="form-control" min="0" max="100">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="chem" class="form-label">Chemistry :</label>
                                <input type="number" name="chem" value="<?php echo $row['chem']; ?>" class="form-control" min="0" max="100">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="bio" class="form-label">Biology :</label>
                                <input type="number" name="bio" value="<?php echo $row['bio']; ?>" class="form-control" min="0" max="100">
                            </div><!--col-md-3-->
                        </div><!--row-->
                        <div class="row my-2">
                            <div class="col-md-3">
                                <label for="total" class="form-label">Total :</label>
                                <input type="text" name="total" value="<?php echo $row['total']; ?>" class="form-control" value="<?php echo totalMarks($numbers); ?>">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="obtain" class="form-label">Obtained :</label>
                                <input type="text" name="obtain" value="<?php echo $row['obtain']; ?>" class="form-control" value="<?php echo sum($numbers); ?>">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="per" class="form-label">Percentage :</label>
                                <input type="text" name="per" value="<?php echo $row['percentage']; ?>" class="form-control" value="<?php echo percentage($numbers); ?>">
                            </div><!--col-md-3-->
                            <div class="col-md-3">
                                <label for="grade" class="form-label">Grade :</label>
                                <input type="text" name="grade" value="<?php echo $row['grade']; ?>" class="form-control" value="<?php echo grade($numbers); ?>">
                            </div><!--col-md-3-->
                        </div><!--row-->
                        <button class="btn btn-primary mt-2 mx-3" type="submit" name="update" style="width:20%;">Update</button>
                    </form>
                    <?php
                                }
                            }
                        }
                    ?>
                </div><!--col-md-8-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
   
    <?php include '../footer.php'; ?>

</body>
</html>