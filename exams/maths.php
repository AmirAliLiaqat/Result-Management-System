<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths Papper - Result Management System</title>
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
                        <h4>Maths <br> Papper</h4>
                        <img src="../images/logo.png" alt="">
                    </div><!--card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <p>Name : ______________</p>
                                <p>Student Id : ______________</p>
                            </div><!--col-md-6-->
                            <div class="col-md-5 justify-content-end">
                                <p>Father :  ______________</p>
                                <p>Class :  _______________</p>
                            </div><!--col-md-6-->
                            <div class="col-md-2">
                                <div id="app"></div>
                            </div>
                        </div><!--row-->
                        <hr>
                        <h4>Tick the correct answer from these fours options... <strong align="right">5 X 10 = 50 Marks</strong></h4>
                        <div class="row">
                            <div class="col-12">
                                <h5>Q1. Which Muslim scientist wrote first book on Algebra ?</h5>
                                <ul class="question-1" style="list-style:none; padding:0">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1">Al-Khwarizmi</label>
                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2">Ibn Sina</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3">Archimedes</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4">Euclid</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12">
                                <h5>Q2. What’s the largest known Prime Number?</h5>
                                <ul class="question-2" style="list-style:none; padding:0">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1">282,589,933 − 3</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2">282,589,933 − 1</label>
                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3">282,589,933 − 5</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4"> None of these</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12">
                                <h5>Q3. Find two number whose sum is 28 and the difference is 4 _____________?</h5>
                                <ul class="question-3" style="list-style:none; padding:0">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1">12,16</label>
                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2">18,10</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3">15,13</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4">14,12</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12">
                                <h5>Q4. acre is equal to ________square foot?</h5>
                                <ul class="question-4" style="list-style:none; padding:0">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1">45434 square foot</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2">34343 square foot</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3">43572 square foot</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4">43560 square foot </label>
                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12">
                                <h5>Q5. The word Geometry has been derived from two Greek words:_____________?</h5>
                                <ul class="question-5" style="list-style:none; padding:0">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1">Geo means Earth</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2">Metron means Measurement.</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3">Hence Geomatery means</label>
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4">Earth measurement</label>
                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <a href="" class="btn btn-primary w-100" name="save">Submit</a>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Teacher Sign :  _________________</p>
                            </div><!--col-md-6-->
                            <div class="col-md-6">
                                <p align="right">Principal Sign :  _____________________</p>
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