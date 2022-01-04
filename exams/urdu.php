<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urdu Papper - Result Management System</title>
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
                        <h4>Urdu <br> Papper</h4>
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
                            <div class="col-12" align="right">
                                <h5>حضرت مکائیل کا اصل نام کیا ہے؟ Q1.</h5>
                                <ul class="question-1"style="list-style:none;">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1"> عبدالرحمن </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2"> عبید اللّہ </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2" class="true">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3"> عبداللّہ </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4"> صبیح اللّہ </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12" align="right">
                                <h5>الله تعالٰی نے حضرت آدم علیہ السلام کے ساتھ زمین پر بہشت سے بھیڑ بکریوں کے کتنے جوڑے اتارے تھے ؟ Q2.</h5>
                                <ul class="question-1"style="list-style:none;">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1"> پانچ جوڑے  </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2"> چھ جوڑے </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3"> سارت جوڑے </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4"> آٹھ جوڑے </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios4" value="option4" class="true">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12" align="right">
                                <h5>حضرت عسیٰ علیہ السلام جب آسمانوں پر اٹھائے گئے تو اس وقت ان کی عمر کیا تھے ؟ Q3.</h5>
                                <ul class="question-1"style="list-style:none;">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1"> اکتیس برس اور 5 ماہ </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2"> چونتیس برس اور 9 ماہ </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3"> تینتیس بر اور 7 ماہ  </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4"> بتیس برس اور 6 ماہ  </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios4" value="option4" class="true">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12" align="right">
                                <h5>حضورؐ کے چچا حضرت عباس ؓ کی نماز جنازہ کس نے پڑھائی تھی ؟ Q4.</h5>
                                <ul class="question-1"style="list-style:none;">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1"> حضرت عمر فاروقؓ </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2"> حضرت ابو بکر ؓ </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3"> حضرت عثمان ؓ </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3" class="true">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4"> حضرت علی </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        </div>
                                    </li>
                                </ul>
                            </div><!--col-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12" align="right">
                                <h5>بتائیے کس سورۃ میں حضرت اسرافیل ؑ کے صور کی کیفیت بتائی گئی ہے ______؟ Q5.</h5>
                                <ul class="question-1"style="list-style:none;">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios1"> المزمل  </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios2"> سورۃ المدثر </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios3"> سورۃ النور </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label" for="exampleRadios4"> سورۃ المومنون </label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios4" value="option4" class="true">
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