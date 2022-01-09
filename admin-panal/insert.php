<?php 
    require '../login/conn.php'; 
    require '../login/messages.php'; 
    // require '../methods.php'; 

    if(isset($_POST['save'])) {
        $studentId = $_POST['stuId'];
        $class = $_POST['class'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];

        $eng = $_POST['eng'];
        $urdu = $_POST['urdu'];
        $maths = $_POST['maths'];
        $pakStudy = $_POST['pak-study'];
        $isl = $_POST['isl'];
        $phy = $_POST['phy'];
        $chem = $_POST['chem'];
        $bio = $_POST['bio'];

        $numbers = [$eng,$urdu,$maths,$pakStudy,$isl,$phy,$chem,$bio];

        $total = $_POST['total'];
        $obtain = $_POST['obtain'];
        $per = $_POST['per'];
        $grade = $_POST['grade'];

        $checkEmail = "SELECT * FROM `student-data` WHERE email = '$email'";
        $query = mysqli_query($conn, $checkEmail) or die("Query Failed");

        if(!mysqli_num_rows($query) > 0) {
            $sql = "INSERT INTO `student-data`(`student_id`, `class`, `first_name`, `last_name`, `email`, `eng`, `urdu`, `maths`, `p.study`, `isl`, `phy`, `chem`, `bio`, `total`, `obtain`, `percentage`, `grade`) 
            VALUES ('$studentId','$class','$firstName','$lastName','$email','$eng','$urdu','$maths','$pakStudy','$isl','$phy','$chem','$bio','$total','$obtain','$per','$grade')";

            $query = mysqli_query($conn, $sql) or die("Query Failed");

            echo " <div class='row'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Data Inserted Successfully...</strong>.
                    <button type='button' class='btn-close mx-2' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";
        } else {
            echo " <div class='row'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email already exists in our database...</strong>.
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
    <title>INSERT - Result Management System</title>
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
                        <h3 class="text-center text-uppercase fst-italic pt-5" style="color:blue">Please Insert the student data</h3>
                        <form action="" method="post">
                            <div class="row m-2">
                                <div class="col-md-6">
                                    <label for="stuId" class="form-label">Student Id :</label>
                                    <input type="text" name="stuId" id="" class="form-control" required>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <label for="class" class="form-label">Class :</label>
                                    <input type="text" name="class" id="" class="form-control" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row m-2">
                                <div class="col-md-6">
                                    <label for="fname" class="form-label">First Name :</label>
                                    <input type="text" name="fname" id="" class="form-control" required>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                    <label for="lname" class="form-label">Last Name :</label>
                                    <input type="text" name="lname" id="" class="form-control" required>
                                </div><!--col-md-6-->
                            </div><!--row-->
                            <div class="row m-2">
                                <div class="col-md-12">
                                    <label class="form-label" for="email">Student Email :</label>
                                    <input type="email" name="email" id="" class="form-control" required>
                                </div><!--col-md-12-->
                            </div><!--row-->
                            <div class="row m-2">
                                <h6 class="my-3"><b>Type the Number :</b></h6>
                                <div class="col-md-3">
                                    <label for="eng" class="form-label">English :</label>
                                    <input type="number" name="eng" id="" class="form-control" min="0" max="100" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="urdu" class="form-label">Urdu :</label>
                                    <input type="number" name="urdu" id="" class="form-control" min="0" max="100" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="maths" class="form-label">Maths :</label>
                                    <input type="number" name="maths" id="" class="form-control" min="0" max="100" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="pak-study" class="form-label">Pak Study :</label>
                                    <input type="number" name="pak-study" id="" class="form-control" min="0" max="100" required>
                                </div><!--col-md-3-->
                            </div><!--row-->
                            <div class="row m-2">
                                <div class="col-md-3">
                                    <label for="isl" class="form-label">Islamiyat :</label>
                                    <input type="number" name="isl" id="" class="form-control" min="0" max="100" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="phy" class="form-label">Physics :</label>
                                    <input type="number" name="phy" id="" class="form-control" min="0" max="100" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="chem" class="form-label">Chemistry :</label>
                                    <input type="number" name="chem" id="" class="form-control" min="0" max="100" required>
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="bio" class="form-label">Biology :</label>
                                    <input type="number" name="bio" id="" class="form-control" min="0" max="100" required>
                                </div><!--col-md-3-->
                            </div><!--row-->
                            <div class="row m-2">
                                <div class="col-md-3">
                                    <label for="total" class="form-label">Total :</label>
                                    <input type="text" name="total" id="" class="form-control" value="">
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="obtain" class="form-label">Obtained :</label>
                                    <input type="text" name="obtain" id="" class="form-control" value="">
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="per" class="form-label">Percentage :</label>
                                    <input type="text" name="per" id="" class="form-control" value="">
                                </div><!--col-md-3-->
                                <div class="col-md-3">
                                    <label for="grade" class="form-label">Grade :</label>
                                    <input type="text" name="grade" id="" class="form-control" value="">
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
    <script src="js/script.js"></script>

</body>
</html>