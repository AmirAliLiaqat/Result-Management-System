<?php
    require '../main-files/conn.php';
    require 'avatar-header.php';

    $sql = "SELECT * FROM `exams` WHERE subject = 'chem'";
    $selected_question = mysqli_query($conn, $sql) or die("Query Failed" . mysqli_connect_error());

    if(isset($_POST['submit'])) {
        if(mysqli_num_rows($selected_question) > 0) {
            $user_id =  $_SESSION['user_id'];
            while($row = mysqli_fetch_assoc($selected_question)) {
                if(isset($_POST['option' . $row['id']])) {
                    $question_id = $row['id'];
                    $selected_option = $_POST['option' . $row['id']];

                    $sql = "INSERT INTO `exam-details`(`user_id`, `question_id`, `selected_option`) 
                        VALUES ('$user_id','$question_id','$selected_option')";
                    $query  = mysqli_query($conn, $sql) or die("Query Failed...");

                    header("location: welcome.php");

                } 
            }
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemistry - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>


    <!-------------------- Section Start -------------------->
    <section style="overflow:hidden">
        <main>
            <div class="container-fluid p-0">
                <div class="row justify-content-center py-5">
                    <div class="col-md-8 p-0" style="background: #ccc; border-radius: 15px;">
                        <div class="card-header">
                            <h4>Chemistry <br> Papper</h4>
                            <img src="../images/logo.png" alt="">
                        </div><!--card-header-->
                        <div class="card-body">
                            <form action="" method="post">
                                <h4>Tick the correct answer from these fours options... <strong>5 X 10 = 50 Marks</strong></h4>
                                <hr>
                                <?php  
                                    if(mysqli_num_rows($selected_question) > 0) {
                                        while($row = mysqli_fetch_assoc($selected_question)) {
                                ?>
                                <div class="row">
                                    <div class="col-12">
                                        <h5><?php echo $row['Q. No']; ?> <?php echo $row['question']; ?></h5>
                                        <ul style="list-style:none; padding:0px;">
                                            <li>
                                                <input class="form-check-input" type="radio" name="option<?php echo $row['id']; ?>" value="<?php echo $row['option1']; ?>"> <?php echo $row['option1']; ?>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="option<?php echo $row['id']; ?>" value="<?php echo $row['option2']; ?>"> <?php echo $row['option2']; ?>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="option<?php echo $row['id']; ?>" value="<?php echo $row['option3']; ?>"> <?php echo $row['option3']; ?>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="option<?php echo $row['id']; ?>" value="<?php echo $row['option4']; ?>"> <?php echo $row['option4']; ?>
                                            </li>
                                        </ul>
                                    </div><!--col-12-->
                                </div><!--row-->
                                <?php
                                        }
                                    }
                                ?>     
                                <button class="btn btn-primary w-100" name="submit" id="submit_exam">Submit</button>
                            </form>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Teacher Sign :  <img src="../images/signature.png" style="width: 200px;"></p>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <p>Principal Sign :  <img src="../images/signature1.png" style="width: 200px;"></p>
                                </div><!--col-md-6-->
                            </div><!--row-->
                        </div><!--card-body-->
                        <div class="card-footer">
                            <p class="text-center">“The best way to predict your future is to create it” - <strong><a href="https://en.wikipedia.org/wiki/Abraham_Lincoln">Abraham Lincoln</a></strong></p>
                            <p class="text-center"><a href="http://localhost/result-management-system">www.result-management-system.com</a></p>
                        </div><!--card-footer-->
                    </div><!--col-md-8-->
                </div><!--row-->
            </div><!--container-fluid-->
        </main>
    </section> 
    <!-------------------- Section End -------------------->

    <?php require '../exams/footer.php'; ?>

</body>
</html>