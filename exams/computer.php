<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Papper - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

    <?php include 'header.php'; ?>

   
    <!-------------------- Section Start -------------------->
    <section>
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-md-10 p-0" style="background: #ccc; border-radius: 15px;">
                    <div class="card-header">
                        <h4>Computer <br> Papper</h4>
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
                            <div class="row">
                                <div class="col-12">
                                    <h5>Q1. The term ‘Computer’ is derived from__________?</h5>
                                    <ul class="question-1" style="list-style:none; padding:0">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios1">Latin</label>
                                                <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios2">German</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios3">French</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios4">Arabic</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--col-12-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-12">
                                    <h5>Q2. Who is the father of Computer?</h5>
                                    <ul class="question-2" style="list-style:none; padding:0">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios1">Allen Turing</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios2">Charles Babbage</label>
                                                <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios3">Simur Cray</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios4">Augusta Adaming</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--col-12-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-12">
                                    <h5>Q3. The basic operations performed by a computer are__________?</h5>
                                    <ul class="question-3" style="list-style:none; padding:0">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios1">Arithmetic operation</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios2">Logical operation</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios3">Storage and relative</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios4">All the above</label>
                                                <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--col-12-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-12">
                                    <h5>Q4. Who is the father of Internet ?</h5>
                                    <ul class="question-4" style="list-style:none; padding:0">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios1">Chares Babbage</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios2">Vint Cerf</label>
                                                <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios3">Denis Riche</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios4">Martin Cooper</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--col-12-->
                            </div><!--row-->
                            <div class="row">
                                <div class="col-12">
                                    <h5>Q5. If a computer has more than one processor then it is known as__________?</h5>
                                    <ul class="question-5" style="list-style:none; padding:0">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios1">Uni-process</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios2">Multiprocessor</label>
                                                <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios3">Multi-threaded</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleRadios4">Multi-programming</label>
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--col-12-->
                            </div><!--row-->
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
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->

    <?php include 'footer.php'; ?>

</body>
</html>