<?php 
    require '../main-files/conn.php';
    require '../main-files/methods.php';
    require 'avatar-header.php';

    $subject = $_GET['subject'];
    $user_id =  $_SESSION['user_id'];
    $first_name =  $_SESSION['first_name'];
    $last_name =  $_SESSION['last_name'];

    $class = "13th";

    $selected_subjects = [1 => "eng", 2 => "urdu", 3 => "maths", 4 => "phy", 5 => "chem", 
    6 => "bio", 7 => "comp", 8 => "isl", 9 => "pak"];
    
    
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Result - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

    <!-------------------- Section Start -------------------->
    <section>
       <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="m-2">
                                <th>Question No</th>
                                <th>Question</th>
                                <th>Your answer</th>
                                <th>Correct answer</th>
                                <th>Status</th>
                                <th>Questions Marks</th>
                                <th>Obtained Marks</th>
                            </tr>
                        </thead>
                        <?php
                            $sql = "SELECT * FROM `exams` WHERE subject = '$subject'" ;
                            $select_subject = mysqli_query($conn, $sql) or die("Query Failed");

                            $total_marks = 0;
                            $obtained_marks = 0;

                            if(mysqli_num_rows($select_subject) > 0) {
                                while($row = mysqli_fetch_assoc($select_subject)) {
                                    $user_selected_answer = '';
                                    $question_marks = 0;
                                    $total_obtained_marks = 0;
                                    $status = "<div class='text-danger'>
                                                    <i i class='far fa-times-circle'></i>
                                                    <h6>False</h6>
                                                </div>";

                                    $select_option = "SELECT * FROM `exam-details`WHERE user_id = '$user_id'";
                                    $select_user_option = mysqli_query($conn, $select_option) or die("Query Failed" . mysqli_connect_error());

                                    while($col = mysqli_fetch_assoc($select_user_option)) {                                                                    
                                        if($col['question_id'] == $row['id'] ) {
                                            if($col['selected_option'] == $row['correct_answer']) {
                                                $obtained_marks += 10;
                                                $question_marks  += 10;
                                                $status = "<div class='text-success'>
                                                                    <i class='far fa-check-circle'></i>
                                                                    <h6>True</h6>
                                                                </div>";
                                            }
                                            if(!empty($col['selected_option'])) {
                                                $user_selected_answer = $col['selected_option'] ;
                                            }
                                            $total_obtained_marks = $total_obtained_marks + $obtained_marks;
                                        }
                                    }
                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['Q. No']; ?> </td>
                                <td> <?php echo $row['question']; ?> </td>
                                <td> <?php echo $user_selected_answer; ?> </td>
                                <td> <?php echo $row['correct_answer']; ?> </td>
                                <td> <?php echo $status; ?> </td>
                                <td> <?php echo 10; ?> </td>
                                <td> <?php echo $question_marks; ?> </td>
                            </tr>
                        </tbody>
                        <?php
                                }
                            }
                        ?>
                        <tbody>
                            <tr>
                                <td>Total Marks</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <?php echo 50; ?> </td>
                            </tr>
                            <?php
                            ?>
                            <tr>
                                <td>Obtained Marks</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <?php echo $total_obtained_marks; ?> </td>
                            </tr>
                            <?php
                            ?>
                            <tr>
                                <td>Percentage</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <?php echo $total_obtained_marks / 50 * 100; ?> %</td>
                            </tr>
                            <?php
                                echo "User Id : ". $user_id . "<br>";
                                echo "User First Name : ". $first_name . "<br>";
                                echo "User Last Name : ". $last_name . "<br>";
                                echo "User Class Name : ". $class . "<br>";
                                echo "Selected Subject : ". $subject . "<br>";
                                echo "Selected Subject Marks : ". $total_obtained_marks . "<br>";

                                echo $sql = "INSERT INTO `student-data`(`class`, `first_name`, `last_name`, `$subject`)
                                 VALUES ('$class', '$first_name', '$last_name', '$total_obtained_marks')";
                            ?>
                            
                        </tbody>
                    </table>
                </div><!--col-md-8-->
            </div><!--row-->
       </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->

    <?php include '../footer.php'; ?>

</body>
</html>