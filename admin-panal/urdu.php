<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urdu - Result Management System</title>
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
                                    <h4>Urdu <br> Papper</h4>
                                    <img src="../images/logo.png" alt="">
                                </div><!--card-header-->
                                <div class="card-body">
                                <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <p>Name : <input type="text" name="name" id="" class="form-control"></p>
                                                <p>Student Id : <input type="stuId" name="name" id="" class="form-control"></p>
                                            </div><!--col-md-6-->
                                            <div class="col-md-5 justify-content-end">
                                                <p>Father : <input type="father" name="name" id="" class="form-control"></p>
                                                <p>Class : <input type="class" name="name" id="" class="form-control"></p>
                                            </div><!--col-md-6-->
                                            <div class="col-md-2">
                                                <div id="app" class="my-4"></div>
                                            </div>
                                        </div><!--row-->
                                        <hr>
                                        <h4>Tick the correct answer from these fours options... <strong align="right">5 X 10 = 50 Marks</strong></h4>
                                        <?php  
                                            require '../main-files/conn.php';
                                            
                                            $sql = "SELECT * FROM `pappers` WHERE papper_name = 'urdu'";
                                            $query = mysqli_query($conn, $sql) or die("Query Failed" . mysqli_connect_error());

                                            if(mysqli_num_rows($query) > 0) {
                                                while($row = mysqli_fetch_assoc($query)) {
                                                
                                        ?>
                                        <div class="row">
                                            <div class="col-12" align="right">
                                                <h5><?php echo $row['question']; ?> Q1.</h5>
                                                <ul class="question-1"style="list-style:none;">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1"> <?php echo $row['option1']; ?> </label>
                                                            <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2"> <?php echo $row['option2']; ?> </label>
                                                            <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2" class="true">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3"> <?php echo $row['option3']; ?> </label>
                                                            <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4"> <?php echo $row['option4']; ?> </label>
                                                            <input type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <?php
                                                }
                                            }
                                        ?>
                                        <button class="btn btn-primary w-100" name="save">Submit</button>
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