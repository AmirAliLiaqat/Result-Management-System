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

    <?php require 'avatar-header.php'; ?>

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
                                    <a href="maths.php" class="btn btn-primary m-1 fst-italic">Start Now</a>
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

    <?php require  '../footer.php'; ?>

</body>
</html>