<?php 
    require '../main-files/conn.php';
    require '../main-files/methods.php';
    require 'avatar-header.php';

    $user_id =  $_SESSION['user_id'];

    $subjects = [1 => "eng", 2 => "urdu", 3 => "maths", 4 => "phy", 5 => "chem", 
    6 => "bio", 7 => "comp", 8 => "isl", 9 => "pak"];

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

    <!-------------------- Section Start -------------------->
    <section>
       <div class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-white text-center p-2 bg-primary">
                        View all the subjects result individually.
                    </div><!--text-white text-center-->
                    <table class="w-100 text-center table-bordered">
                        <?php
                            foreach ($subjects as $id => $subject) {
                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $id; ?>. </td>
                                <td class="text-capitalize"> <?php echo $subject; ?> </td>
                                <td> 
                                    <a href="view-result.php?subject=<?php echo $subject; ?>" class="btn btn-primary my-1">Show Result</a> 
                                </td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div><!--col-md-6-->
                <div class="col-md-6">
                    <div class="text-white text-center p-2 bg-success">
                        View full subjects listed result card.
                    </div><!--text-white text-center-->
                    <?php  
                        require '../main-files/conn.php';
                        
                        $sql = "SELECT * FROM `student-data`WHERE id = 1";
                        $query = mysqli_query($conn, $sql) or die("Query Failed");
                        if(mysqli_num_rows($query) > 0) {
                            while($row = mysqli_fetch_assoc($query)) {
                            
                    ?>
                    <table class="table table-hover table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th> <p> <b>Sr. No</b> </p> </th>
                                <th> <p> <b>Subjects</b> </p> </th>
                                <th> <p> <b>Total Marks</b> </p> </th>
                                <th> <p> <b>Obtained</b> </p> </th>
                                <th> <p> <b>Percentage</b> </p> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($subjects as $id => $subject) {
                            ?>
                            <tr>
                                <td> <?php echo $id; ?>. </td>
                                <td class="text-capitalize"> <?php echo $subject; ?> </td>
                                <td> 50 </td>
                                <td> <?php echo 40; ?> </td>
                                <td> <?php echo $row['percentage']; ?> % </td>
                            </tr>
                            <?php
                                }
                            ?>
                            <tr>
                                <td> Total </td>
                                <td>  </td>
                                <td> 450 </td>
                                <td> 360 </td>
                                <td> 96.5% </td>
                            </tr>
                            <tr>
                                <td> Grade </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td> A+ </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                            }
                        }
                    ?>
                </div><!--col-md-6-->
            </div><!--row-->
       </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->

    <?php include '../footer.php'; ?>

</body>
</html>