<?php 
include "../session.php";

if (isset($_GET['error'])) {
    $error = "";
    $errorMsg = $_GET['error'];
} else {
    $error = "visually-hidden";
    $errorMsg = "";
}

if (isset($_GET['success'])) {
    $success = "";
    $successMsg = $_GET['success'];
} else {
    $success = "visually-hidden";
    $successMsg = "";
}
?>

<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://wwww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include "../head.php" ?>
    <!-- Custom Stylesheets -->
    <link href="../stylesheet.css" rel="stylesheet" />
    <link href="../P1-style.css" rel="stylesheet" />
    <link href="../P1_P2-style.css" rel="stylesheet" />
</head>

<body>
    <?php include "../header.php" ?>
    <div class="alert alert-warning d-flex align-items-center <?php echo $error ?>" role="alert">
        <div class="">
            <?php echo $errorMsg ?>
        </div>
    </div>
    <div class="alert alert-success <?php echo $success ?>" role="alert">
        <?php echo $successMsg ?>
    </div>
    <?php include "product-list.php" ?>
    <?php include "../footer.php" ?>
</body>