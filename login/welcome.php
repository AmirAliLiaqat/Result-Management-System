<?php
    session_start();

    // if(!isset($_SESSION['user_id'])) {
    //     header("Location: login.php");
    // }

    // setcookie ("email",$_POST["email"],time()+ 3600);
	//     setcookie ("password",$_POST["password"],time()+ 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

    <!-------------------- Header Start -------------------->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark" >
            <div class="container">
                <a class="navbar-brand" href="http://localhost/result-management-system/index.php"><img src="../images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  m-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://localhost/result-management-system/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="avatar px-2 text-white">
                        <span>
                            Hello, 
                            <?php echo $_SESSION['first_name']; ?>
                        </span>
                        <img src="../images/avatar.png">
                        <div class="avatar_profile">
                            <a href="edit-user.php?id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-secondary text-start w-100">Edit Profile</a>
                            <a href="delete-user.php?id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-secondary text-start w-100">Delete Accont</a>
                            <a href="logout.php?id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-secondary text-start w-100">Logout</a>
                        </div><!--avatar_profile-->
                    </div><!--avatar-->
                </div><!--collapse-->
            </div><!--container-->
        </nav>
    </header>
   <!-------------------- Header End -------------------->

    <!-------------------- Section Start -------------------->
    <section>
       <div class="container my-5">
            <h3 class="text-center text-uppercase fst-italic py-3" style="color:blue">Select the papper you want to do</h3>
            <div class="row">
                <div class="col-md-4 text-white text-center p-2 bg-primary">Total Pappers = 20</div><!--col-md-4-->
                <div class="col-md-4 text-white text-center p-2 bg-success">Taken Pappers = 13</div><!--col-md-4-->
                <div class="col-md-4 text-white text-center p-2 bg-info">Pendding Pappers = 7</div><!--col-md-4-->
            </div><!--row-->
            <div class="row py-5">
                <div class="col-md-12">
                    <table class="w-100 table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="p-2">Sr. No</th>
                                <th class="p-2">Papper Name</th>
                                <th class="p-2">Marks</th>
                                <th class="p-2">Start</th>
                                <th class="p-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>English</td>
                                <td>50</td>
                                <td>
                                    <a href="english.php" class="btn btn-primary m-1 fst-italic" name="press">Start Now</a>
                                </td>
                                <td class="text-success">
                                    <i class="far fa-check-circle"></i>
                                    <h6>Taken</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Urdu</td>
                                <td>50</td>
                                <td>
                                    <a href="urdu.php" class="btn btn-primary m-1 fst-italic">Start Now</a>
                                </td>
                                <td class="text-danger">
                                    <i class="far fa-times-circle"></i>
                                    <h6>Pendding</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Maths</td>
                                <td>50</td>
                                <td>
                                    <a href="" class="btn btn-primary m-1 fst-italic">Start Now</a>
                                </td>
                                <td class="text-success">
                                    <i class="far fa-check-circle"></i>
                                    <h6>Taken</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Computer</td>
                                <td>50</td>
                                <td>
                                    <a href="" class="btn btn-primary m-1 fst-italic">Start Now</a>
                                </td>
                                <td class="text-success">
                                    <i class="far fa-check-circle"></i>
                                    <h6>Taken</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--col-md-12-->
            </div><!--row-->
       </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->

    <?php include '../footer.php'; ?>

</body>
</html>