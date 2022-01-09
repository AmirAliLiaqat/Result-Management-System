<?php 
    require '../login/conn.php'; 

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
    <title>English - Result Management System</title>
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
                        <div class="row justify-content-center pt-5">
                            <div class="col-md-10 p-0" style="background: #ccc; border-radius: 15px;">
                                <div class="card-header">
                                    <h4>English <br> Papper</h4>
                                    <img src="../images/logo.png" alt="">
                                </div><!--card-header-->
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <p>Name : <input type="text" name="name" id="" class="form-control"></p>
                                                <p>Student Id : <input type="text" name="stuId" id="" class="form-control"></p>
                                                <input type="hidden" name="total" id="" class="form-control">
                                                <input type="hidden" name="obtain" id="" class="form-control">
                                                <input type="hidden" name="per" id="" class="form-control">
                                            </div><!--col-md-6-->
                                            <div class="col-md-5 justify-content-end">
                                                <p>Father : <input type="text" name="father" id="" class="form-control"></p>
                                                <p>Class : <input type="text" name="class" id="" class="form-control"></p>
                                            </div><!--col-md-6-->
                                            <div class="col-md-2">
                                                <div id="app" class="my-4"></div>
                                            </div>
                                        </div><!--row-->
                                        <hr>
                                        <h4>Tick the correct answer from these fours options... <strong align="right">5 X 10 = 50 Marks</strong></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q1. Anam is the smartest _______ girls?</h5>
                                                <ul class="question-1" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">among others</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">of all others</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">of all</label>
                                                            <input class="form-check-input true" type="checkbox" name="myAnswer1" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">of</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q2. Identify the correct Spellings:</h5>
                                                <ul class="question-1" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">Metropolitan</label>
                                                            <input class="form-check-input true" type="checkbox" name="myAnswer2" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">Metropoleton</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">Metropulitan</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4"> None of these</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q3. Antonym of “RAUCOUS” is _________?</h5>
                                                <ul class="question-1" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">Hoarse</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">Subdued</label>
                                                            <input class="form-check-input true" type="checkbox" name="myAnswer3" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">Strident</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">None of these</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q4. “A PIPE DREAM” means ?</h5>
                                                <ul class="question-1" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">A pleasant dream</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">A bad dream</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">An impracticable plan</label>
                                                            <input class="form-check-input true" type="checkbox" name="myAnswer4" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">None of these</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q5. She has been exempted ______ night duty.</h5>
                                                <ul class="question-1" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">with</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">for</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">from</label>
                                                            <input class="form-check-input true" type="checkbox" name="myAnswer5" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">None of these</label>
                                                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <button class="btn btn-primary w-100" name="submit">Submit</button>
                                    </form>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Teacher Sign :  <img src="../images/signature.png" style="width: 300px;"></p>
                                        </div><!--col-md-6-->
                                        <div class="col-md-6">
                                            <p>Principal Sign :  <img src="../images/signature1.png" style="width: 300px;"></p>
                                        </div><!--col-md-6-->
                                    </div><!--row-->
                                </div><!--card-body-->
                                <div class="card-footer">
                                    <p class="text-center">“The best way to predict your future is to create it” - <strong><a href="https://en.wikipedia.org/wiki/Abraham_Lincoln">Abraham Lincoln</a></strong></p>
                                    <p class="text-center"><a href="http://localhost/result-management-system">www.result-management-system.com</a></p>
                                </div><!--card-footer-->
                            </div><!--col-md-8-->
                        </div><!--row-->
                    </div><!--col-md-10-->
                </div><!--row-->
            </div><!--container-fluid-->
        </main>
    </section> 
    <!-------------------- Section End -------------------->

</body>
</html>