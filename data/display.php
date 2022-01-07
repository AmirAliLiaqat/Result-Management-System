<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display - Result Management System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <!-------------------- Section Start -------------------->
    <section>
        <div class="container-fluid py-3">
            <div class="row bg-white py-3">
                <h1 class="text-center text-primary" style="text-transform:uppercase; text-shadow: 2px 2px #000 !important; font-weight:bold">Students Result</h1>  
                <div class="col-md-12" style="overflow-x: auto">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="text-center bg-dark text-white">
                                <th>Stu Id</th>
                                <th>Class</th>
                                <th>Fitst Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>English</th>
                                <th>Urdu</th>
                                <th>Math</th>
                                <th>Pak Study</th>
                                <th>Islamiyat</th>
                                <th>Physics</th>
                                <th>Chemistry</th>
                                <th>Biology</th>
                                <th>Total</th>
                                <th>Otained</th>
                                <th>Percentage</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <?php  
                            require 'conn.php';
                            
                            $sql = "SELECT * FROM `student-data`";
                            $query = mysqli_query($conn, $sql) or die("Query Failed" . mysqli_connect_error());

                            if(mysqli_num_rows($query) > 0) {
                                while($row = mysqli_fetch_assoc($query)) {
                                   
                        ?>
                        <tbody>
                            <tr class = "text-center">
                                <td> <?php echo $row['student_id']; ?> </td>
                                <td> <?php echo $row['class']; ?> </td>
                                <td> <?php echo $row['first_name']; ?> </td>
                                <td> <?php echo $row['last_name']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['eng']; ?> </td>
                                <td> <?php echo $row['urdu']; ?> </td>
                                <td> <?php echo $row['maths']; ?> </td>
                                <td> <?php echo $row['p.study']; ?> </td>
                                <td> <?php echo $row['isl']; ?> </td>
                                <td> <?php echo $row['phy']; ?> </td>
                                <td> <?php echo $row['chem']; ?> </td>
                                <td> <?php echo $row['bio']; ?> </td>
                                <td> <?php echo $row['total']; ?> </td>
                                <td> <?php echo $row['obtain']; ?> </td>
                                <td> <?php echo $row['percentage']; ?> </td>
                                <td> <?php echo $row['grade']; ?> </td>
                            </tr>
                        </tbody>
                        <div class="buttons text-center my-2 py-3" style="background: #ccc;">
                            <button class="btn btn-danger mx-1" style="width:10%;">
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:none;">Delete</a>
                            </button>
                            <button class="btn btn-primary mx-1" style="width:10%;">
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:none;">Edit</a>
                            </button>
                        </div><!--buttons-->
                        <?php
                            }
                        }
                        ?>
                    </table>
                    <button class="btn btn-info mb-2" type="submit" name="addNew" style="width:10%;">
                        <a href="http://localhost/result-management-system/data/insert.php" class="text-white" style="text-decoration:none;">Add New</a>
                    </button>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
   
    <?php include '../footer.php'; ?>

</body>
</html>