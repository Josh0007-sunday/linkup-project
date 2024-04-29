<?php
include 'connect.php';
session_start();
$id = $_SESSION['id'];
$email = $_SESSION['email'];

if (!isset($id)) {
  header('location: ../form/login.php');
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/w3.css" />
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/font-awesom-icon.min.css" />
    <link rel="stylesheet" href="../assets/google-font.css" />
    <link rel="stylesheet" href="../assets/bootstrap-3.4.1-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="../assets/bootstrap-3.4.1-dist/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="../assets/bootstrap-3.4.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/bootstrap-3.4.1-dist/css/bootstrap.min.css" />
    <script src="../assets/w3-script.JS"></script>
    <script src="../assets/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LINKUP | User Dashboard</title>
</head>

<body>
    <!--top bar-->
    <div class="w3-bar w3-top w3-darkblue w3-large" style="z-index: 4;">
        <buttton class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();">
            <i class="fa fa-bars"> Menu</i>
        </buttton>
        <span class="w3-bar-item w3-right"></span>
    </div>
    <!--side bar-->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" id="mySidebar"
        style="z-index: 3; margin-top: 40px; width: 300px;"><br>
        <div class="w3-container w3-row">
            <div class="w3-col s4">
                <img style="width: 58px;" src="../assets/img/g.png" alt="profile picture"
                    class="w3-circle w3-margin-right">
            </div>
            <div class="w3-col s8 w3-bar">
            <?php
                  $select = mysqli_query($con, "SELECT * FROM `registration` WHERE id = '$id'") or die('query failed');
                  if (mysqli_num_rows($select) > 0) {
                    $fetch = mysqli_fetch_assoc($select);
                  }
                  
                  ?>
                <span>Welcome, <b><?php echo $fetch['fname']; ?><?php echo $fetch['lname']; ?></b></span><br>
                <a href="" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
                <a href="" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
                <a href="" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
            </div>
            <hr>
            <div class="w3-container w3-bar-block">
                <h5>Dashboard</h5>
            </div>
            <div class="w3-bar-block">
                <a style=" text-decoration: none;" href=""
                    class="w3-bar-item w3-button w3-margin-bottom w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black"
                    title="close menu" onclick="w3_close()"><i class="fa fa-remove fa fw"></i> Close menu</a>
                <a style=" text-decoration: none;" href="../dashboard/dashboard.php" class="w3-bar-item w3-button w3-padding w3-darkblue"><i class="fa fa-dashboard"></i>
                    Dashboard</a><br>
                <div class="w3-container w3-center">
                    <h5>Component</h5>
                </div>
                <a style=" text-decoration: none;" href="" class="w3-bar-item w3-button w3-margin-bottom w3-light-grey"><i class="fa fa-dashboard"></i>
                    Profile</a>
                <a style=" text-decoration: none;" href="../dashboard/register_skill.php" class="w3-bar-item w3-button w3-margin-bottom w3-light-grey"><i class="fa fa-dashboard"></i>
                    register skill</a>
                <a style=" text-decoration: none;" href="" class="w3-bar-item w3-button w3-margin-bottom w3-light-grey"><i class="fa fa-dashboard"></i>
                    Profile</a>

                <a style=" text-decoration: none;" href="../dashboard/logout.php" class="w3-bar-item w3-button w3-margin-bottom w3-red"><i class="fa fa-sign-out"></i>
                    Logout</a>
            </div>
        </div>
    </nav>
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" id="myOverlay"
        style="cursor: pointer;" title="close side menu"></div>

    <!--body content-->
    <div class="w3-main" style="margin-left: 300px; margin-top: 43px;">
    <header style="padding-top: 22px; padding-left: 22px;" class="w3-comtainer">
            <h5><b><i class="fa fa-dashboard"></i> Hi, <?php echo $fetch['fname']; ?><?php echo $fetch['lname']; ?></b></h5>
        </header>