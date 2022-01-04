<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS - Result Management System</title>
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

    <?php include 'header.php'; ?>

   <!-------------------- Section Start -------------------->
    <section>
        <div class="container">
            <div class="row my-3">
               <div class="col-md-12">
                    <div class="links">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="btn btn-primary" href="http://localhost/result-management-system/data/insert.php" role="button">Insert Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-secondary" href="http://localhost/result-management-system/data/display.php" role="button">Show Data</a>
                            </li>
                            <li class="nav-item mt-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success"  style="border: 1px solid #fff" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   Login
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="text-transform:uppercase;">Login Student</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <label for="email" class="form-label"><b>Username / Email :</b></label>
                                                    <input type="text" name="email" class="form-control" placeholder="e.g my@gmail.com" value="" autofill="off" required>
                                                    <label for="password" class="form-label pt-2"><b>Password :</b></label>
                                                    <input type="password" name="password" class="form-control" placeholder="e.g 0123456789" value="" required>
                                                    <p align="right" class="mt-2"><a href="">Forgot Password</a></p>
                                                    <div class="captcha mb-2">
                                                        <p>Please check the box below to proceed.</p>
                                                        <img src="images/captcha.png">
                                                    </div>
                                                </form>
                                                <p align="center"><b>Don’t have account ?</b><a href="login/register.php" style="text-decoration: none; color:red;">Sign up</a></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" name="login">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-danger" href="http://localhost/result-management-system/login/register.php" role="button">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-info" href="http://localhost/result-management-system/pappers/main.php" role="button">Pappper</a>
                            </li>
                        </ul>
                        <div class="main-content my-5">
                            <h1 class="text-center">Result Management System</h1>
                        </div><!--main-content-->
                    </div><!--links-->
                </div><!--col-md-12-->
            </div><!--row-->
            
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->

    <!-------------------- Section Start -------------------->
    <section>
        <div class="container my-4">
            <h1 class="text-center my-5">  Featured Courses </h1>
            <div class="card-group my-4">
                <div class="card border-primary mx-2" style="border-radius: 15px;">
                    <img src="images/english.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">English</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
                <div class="card border-success mx-2" style="border-radius: 15px;">
                    <img src="images/urdu.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Urdu</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
                <div class="card border-danger mx-2" style="border-radius: 15px;">
                    <img src="images/maths.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Maths</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
            </div><!--card-group-->
            <div class="card-group my-4">
                <div class="card border-primary mx-2" style="border-radius: 15px;">
                    <img src="images/phy.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Physics</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
                <div class="card border-success mx-2" style="border-radius: 15px;">
                    <img src="images/chem.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Chemistry</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
                <div class="card border-danger mx-2" style="border-radius: 15px;">
                    <img src="images/bio.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Biology</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
            </div><!--card-group-->
            <div class="card-group my-4">
                <div class="card border-primary mx-2" style="border-radius: 15px;">
                    <img src="images/computer.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Computer</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
                <div class="card border-success mx-2" style="border-radius: 15px;">
                    <img src="images/p.study.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pak Study</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
                <div class="card border-danger mx-2" style="border-radius: 15px;">
                    <img src="images/isl.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Islamiyat</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="btn btn-primary w-50" href="#" role="button">Start Now</a>
                    </div>
                </div>
            </div><!--card-group-->
            <div class="moreCourses">
                <a class="btn btn-primary" href="#" role="button">More Courses</a>
            </div><!--moreCourses-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->

    <?php include 'footer.php'; ?>

</body>
</html>