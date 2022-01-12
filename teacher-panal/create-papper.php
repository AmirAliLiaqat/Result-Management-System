<?php 
    require '../main-files/conn.php'; 
    require '../main-files/messages.php';
    
    if(isset($_POST['save'])) {
        // var_dump($_POST);
        $papperName = $_POST['pappers'];
        $questionNumber = $_POST['questionNumber'];
        $question = $_POST['question'];
        $firstOption = $_POST['option1'];
        $secondOption = $_POST['option2'];
        $thirdOption = $_POST['option3'];
        $fourthOption = $_POST['option4'];
        $correctOption = $_POST['correctOption'];

        $checkQuestion = "SELECT * FROM `pappers` WHERE question = '$question'";
        $query = mysqli_query($conn, $checkQuestion) or die("Query Failed" . mysqli_connect_error());

        if(!mysqli_num_rows($query) > 0) {
            // if("SELECT * FROM `pappers` WHERE papper_name = '$papperName < 5'  ") {
                // echo " <div class='row'>
                //     <div class='alert alert-success alert-dismissible fade show' role='alert'>
                //         <strong>You don't have an access to add more than 5 questions of this catagiery...</strong>.
                //         <button type='button' class='btn-close mx-2' data-bs-dismiss='alert' aria-label='Close'></button>
                //     </div>
                // </div>";
            // } else {
                $sql = "INSERT INTO `pappers`( `question_number`, `papper_name`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) 
                VALUES ('$questionNumber','$papperName','$question','$firstOption','$secondOption','$thirdOption','$fourthOption','$correctOption')";

                $query = mysqli_query($conn, $sql) or die("Query Failed" . mysqli_connect_error());

                echo " <div class='row'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Question Inserted Successfully...</strong>.
                        <button type='button' class='btn-close mx-2' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>";
            // }

        } else {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>This question already exist in this papper...</strong>.
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
    <title>Create Papper - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css"><script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                        <h3 class="text-center text-uppercase fst-italic py-5" style="color:blue">Create M.C.Q.S. Papper</h3>
                        <form action="" method="post">
                            <div class="row m-2">
                                <div class="col-md-6">
                                    <p style="display:inline-block;">Numbers of rows</p>
                                    <input type="number" name="" class="p-1" value="10">
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <p style="display:inline-block;">Select the papper</p>
                                    <select name="pappers" id="" value="Select Papper" class="p-1 w-50" required>
                                        <option value="">Select papper</option>
                                        <option value="eng">English</option>
                                        <option value="urdu">Urdu</option>
                                        <option value="maths">Maths</option>
                                        <option value="phy">Physics</option>
                                        <option value="chem">Chemistry</option>
                                        <option value="bio">Biology</option>
                                        <option value="comp">Computer</option>
                                        <option value="isl">Islamiyat</option>
                                        <option value="pak">Pak Study</option>
                                    </select>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="papper_field">
                                <div class="row m-2">
                                    <div class="col-md-3">
                                        <label for="questionNumber" class="form-label">Question No.</label>
                                        <input type="text" name="questionNumber" id="" class="form-control" min="0" max="100" required>
                                    </div><!--col-md-3-->
                                </div><!--row-->
                                <div class="row m-2 questions">
                                    <div class="col-md-12">
                                        <label class="form-label" for="question">Type Question:</label>
                                        <input type="text" name="question" id="" class="form-control" required>
                                    </div><!--col-md-12-->
                                </div><!--row-->
                                <div class="row m-2 options">
                                    <div class="col-md-3">
                                        <label for="option1" class="form-label">Option 1:</label>
                                        <input type="text" name="option1" id="" class="form-control" min="0" max="100" required>
                                    </div><!--col-md-3-->
                                    <div class="col-md-3">
                                        <label for="option2" class="form-label">Option 2:</label>
                                        <input type="text" name="option2" id="" class="form-control" min="0" max="100" required>
                                    </div><!--col-md-3-->
                                    <div class="col-md-3">
                                        <label for="option3" class="form-label">Option 3:</label>
                                        <input type="text" name="option3" id="" class="form-control" min="0" max="100" required>
                                    </div><!--col-md-3-->
                                    <div class="col-md-3">
                                        <label for="option4" class="form-label">Option 4:</label>
                                        <input type="text" name="option4" id="" class="form-control" min="0" max="100" required>
                                    </div><!--col-md-3-->
                                </div><!--row-->
                                <div class="row m-2">
                                    <div class="col-md-3">
                                        <label for="correctOption" class="form-label">Correct Option:</label>
                                        <input type="text" name="correctOption" id="" class="form-control" min="0" max="100" required>
                                    </div><!--col-md-3-->
                                </div><!--row-->
                            </div><!--papper_field-->
                            <div class="row px-5" align="end">
                                <div class="col-md-12">
                                    <!-- <a href="" class="add_more">Add More Fields</a> -->
                                </div><!--col-md-3-->
                            </div><!--row-->
                            <button class="btn btn-primary mt-4 mx-4" type="submit" name="save" style="width:20%;">Save</button>
                        </form>
                    </div><!--col-md-10-->
                </div><!--row-->
            </div><!--container-fluid-->
        </main>
    </section> 
    <!-------------------- Section End -------------------->

    <!-------------------- Bootstrap Js -------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
    <!-------------------- Custom Js -------------------->
    <!-- <script src="../js/script.js"></script> -->
    <script src="../js/jquery.js"></script>

</body>
</html>