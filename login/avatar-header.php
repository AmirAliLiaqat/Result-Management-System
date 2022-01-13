<?php
    session_start();

    // if(!isset($_SESSION['user_id'])) {
    //     header("Location: login.php");
    // }

    // setcookie ("email",$_POST["email"],time()+ 3600);
	//     setcookie ("password",$_POST["password"],time()+ 3600);
?>
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
                        <div class="avatar_profile" style="margin-left:-25px;">
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