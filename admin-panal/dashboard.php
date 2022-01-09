<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Result Management System</title>
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
                        <div class="row">
                            <div class="col-md-12 my-3">
                                <i class="fas fa-home" style="font-size:32px"></i>&nbsp;
                                <h3 class="d-inline">Dashboard</h3>
                                <p class="mt-2 px-5 text-secondary">Do bigger things with dashboard, make all the changes in our site with this dashboard panal...</p>
                            </div><!--col-md-12-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-3 p-2 bg-primary text-white dashboard_col">
                                <i class="fas fa-globe-europe " style="font-size: 48px"></i>&nbsp;
                                <div class="content mb-3" style="display: inline-block;">
                                    <p style="display: inline;">Today Visiting</p> <br>
                                    <h3 class="d-inline">1.975,224</h3> <br>
                                    <p style="display: inline;">24% higher yesterday</p>
                                </div>
                            </div><!--col-md-3-->
                            <div class="col-md-3 p-2 bg-secondary text-white dashboard_col">
                                <i class="fas fa-shopping-bag " style="font-size: 48px"></i>&nbsp;
                                <div class="content mb-3" style="display: inline-block;">
                                    <p style="display: inline;">Today Sales</p> <br>
                                    <h3 class="d-inline">$329,291</h3> <br>
                                    <p style="display: inline;">$390,312 before use</p>
                                </div>
                            </div><!--col-md-3-->
                            <div class="col-md-3 p-2 bg-success text-white dashboard_col">
                                <i class="fas fa-tv " style="font-size: 48px"></i>&nbsp;
                                <div class="content mb-3" style="display: inline-block;">
                                    <p style="display: inline;">Unique Visits</p> <br>
                                    <h3 class="d-inline">54.45%</h3> <br>
                                    <p style="display: inline;">17% average </p>
                                </div>
                            </div><!--col-md-3-->
                            <div class="col-md-3 p-2 bg-danger text-white dashboard_col">
                                <i class="fas fa-clock " style="font-size: 48px"></i>&nbsp;
                                <div class="content mb-3" style="display: inline-block;">
                                    <p style="display: inline;">Bounce Date</p> <br>
                                    <h3 class="d-inline">32.16%</h3> <br>
                                    <p style="display: inline;">65.45% average time</p>
                                </div>
                            </div><!--col-md-3-->
                        </div><!--row-->
                    </div><!--col-md-10-->
                </div><!--row-->
            </div><!--container-fluid-->
        </main>
    </section> 
    <!-------------------- Section End -------------------->

</body>
</html>

                        