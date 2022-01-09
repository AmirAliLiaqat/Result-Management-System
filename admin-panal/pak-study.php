<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pak Study - Result Management System</title>
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
                                    <h4>Pak Study <br> Papper</h4>
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
                                                <h5>Q1. Who was the first President of the Constituent Assembly of Pakistan?</h5>
                                                <ul class="question-1" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">Liaquat Ali Khan</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">Quaid-e-Azam</label>
                                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">Moulvi Tameez-ud-Din</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">Sardar Abdur Rab Nishtar</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q2. After how many years Pakistan got its first constitution?</h5>
                                                <ul class="question-2" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">5 years</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">7 years</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">9 years</label>
                                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">11 years</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q3. When the Constituent Assembly passed the Objective Resolution?</h5>
                                                <ul class="question-3" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">14th February 1949</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">12th March 1949</label>
                                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">9th June 1949</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">15th August 1949/label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q4. Who was Mohammad Ali Bogra?</h5>
                                                <ul class="question-4" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">Prime Minister</label>
                                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">Foreign Minister</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">Law Minister</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">Parliament Minister</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!--col-12-->
                                        </div><!--row-->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Q5. Who was the Prime Minister of Pakistan during enforcement of first constitution?</h5>
                                                <ul class="question-5" style="list-style:none; padding:0">
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios1">Mohammad Ali Bogra</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios2">Khwaja Nazim Uddin</label>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios3">Choudhry Mohammad Ali</label>
                                                            <input class="form-check-input true" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="exampleRadios4">Ibrahim Ismail Chundrigar</label>
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
                    </div><!--col-md-10-->
                </div><!--row-->
            </div><!--container-fluid-->
        </main>
    </section> 
    <!-------------------- Section End -------------------->

</body>
</html>