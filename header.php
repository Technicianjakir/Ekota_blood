<?php
include('admin/conn.php');
// 
$help_sql = mysqli_query($conn,"SELECT * FROM `help_line_data` WHERE `id`='1'");
  $help_row = mysqli_fetch_assoc($help_sql);
// 

$dsql = mysqli_query($conn,"SELECT * FROM `donor`");
$c_donor = mysqli_num_rows($dsql);

$dl_sql = mysqli_query($conn,"SELECT * FROM `donet_list`");
$c_donat = mysqli_num_rows($dl_sql);

if(isset($_POST['esub'])){
    
        $sub = $_POST['sub'];
      $suc =  mysqli_query($conn,"INSERT INTO `subscribe`(`email`) VALUES ('$sub')");
      if($suc){ 
                $last_id = $conn->insert_id;
                                         
                echo "<script>alert('Now You are New Member. Your Member ID IS: $last_id')</script>";
                                     }
      
}


if(isset($_POST['mess_sub'])){
     $y_name = $_POST['y_name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $y_mess = $_POST['y_mess'];
     $suc = mysqli_query($conn,"INSERT INTO `comments`( `name`, `phone`, `email`, `mess`) VALUES ('$y_name','$email','$phone','$y_mess')");
     if($suc){
                                         $last_id = $conn->insert_id;
                                         
                                        echo "<script>alert('Your Message Sent succesfull very soon we will reply you. Your Message ID is: $last_id')</script>";
                                     }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- --bootstrap--- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- ----fontawesome--- -->
    <script src="https://kit.fontawesome.com/eae7e41c75.js" crossorigin="anonymous"></script>

    <!-- ------css------- -->
    
    <link rel="stylesheet" href="home.css">
    <link rel="shortcut icon" type="image/png" href="image/logo.png">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="swipper/swiper-bundle.min.css">
</head>

<body>
    <!-- -------Mobile menu start--------- -->
    <nav class="navbar navbar-expand-lg d-lg-none d-xl-none d-xl-block menu-bar">
        <div class="container-fluid">
            <a class="navbar-brand fw-semibold text-white" href="#">Ekota Blood And Social Org</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item menu-link">
                        <a class="nav-link" aria-current="page" href="index.php">
                            <i class="fa fa-home"></i>
                            HOME</a>
                    </li>
                    <li class="nav-item menu-link">
                        <a class="nav-link" href="donet_register.php">
                            <i class="fa fa-droplet"></i>
                            Donate</a>
                    </li>
                     <li class="nav-item menu-link">
                        <a class="nav-link" href="post.php">
                            <i class="fa fa-users"></i>
                            Blogs</a>
                    </li>
                     <li class="nav-item menu-link">
                        <a class="nav-link" href="team.php">
                            <i class="fa fa-users"></i>
                            Team</a>
                    </li>
                    <li class="nav-item menu-link">
                        <a class="nav-link" href="aboutus.php">
                            <i class="fa fa-graduation-cap"></i>
                            About us</a>
                    </li>

                    <li class="nav-item menu-link">
                        <a class="nav-link" href="contactus.php">
                            <i class="fa fa-envelope"></i>
                            Contact us</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <!--------Infobar------------>
    <nav class="navbar navbar-expand-lg text-white info-navbar">
        <div class="container">
            <div class="nav-social-icon">
                <a href="https://www.facebook.com/groups/670863406677198/?ref=share&mibextid=NSMWBT">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <div class="d-none d-xl-block d-xxl-none ">
                <ul class="navbar-nav m-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white fw-bold fs-5 fst-italic" aria-current="page" href="#">Ekota
                            Blood And Social Org</a>
                    </li>
                </ul>
            </div>
            <div class="align-middle ">
                <p class="mt-2 text-white"> <i class="fa-solid fa-phone me-2"></i> HELP LINE: <?php echo $help_row['phone']; ?> </p>
            </div>
        </div>
    </nav>
      <!-- -------Infobar end--------- -->

    <!-- -------Navbar banner start-------- -->

    <div class="container-fluid nav-banner text-center d-flex d-xxl-none">
        <div>
            <img class="img-fluid" src="Images/left-design.png" alt="">
        </div>

        <div>
            <img class="img-fluid" src="Images/logo.png" alt="">
        </div>
        <div>
            <img class="img-fluid" src="Images/right-design.png" alt="">
        </div>
    </div>

    <!-- -------Navbar banner end-------- -->

    <!-- ---------Manin Navbar start----------- -->
    <nav class="navbar navbar-expand-lg menu-bar d-none d-xl-block d-xxl-none ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item d-flex ">
                    <li class="nav-item menu-link">
                        <a class="nav-link" aria-current="page" href="index.php">
                            <i class="fa fa-home"></i>
                            Home</a>
                    </li>
                    <li class="nav-item menu-link">
                        <a class="nav-link" href="donet_register.php">
                            <i class="fa fa-droplet"></i>
                            Donate</a>
                    </li>
                     <li class="nav-item menu-link">
                        <a class="nav-link" href="post.php">
                            <i class="fa fa-users"></i>
                            Blogs</a>
                    </li>
                     <li class="nav-item menu-link">
                        <a class="nav-link" href="team.php">
                            <i class="fa fa-users"></i>
                            Team</a>
                    </li>
                    <li class="nav-item menu-link">
                        <a class="nav-link" href="aboutus.php">
                            <i class="fa fa-graduation-cap"></i>
                            About us</a>
                    </li>
                   
                    <li class="nav-item menu-link">
                        <a class="nav-link" href="contactus.php">
                            <i class="fa fa-envelope"></i>
                            Contact us</a>
                    </li>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!-- ---------Main Navbar End ----------- -->