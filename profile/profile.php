<?php
include "../session.php";
include "../connect-to-database.php";

$username = $_SESSION['username'];
?>

<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://wwww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include "../head.php" ?>
	<!-- Custom Stylesheets -->
	<link href="../stylesheet.css" rel="stylesheet" />
</head>
<body>
    <?php include "../header.php" ?>
    <div class="w-50 mx-auto container-fluid my-4 p-4 border border-4 rounded-3 bg-white">
        <h1>Profile</h1>
        <div class="mb-2">username: <?php echo $username ?></div>
        <a href="../login-page/logout.php" class="btn btn-danger text-white mb-3">Logout</a>
        <h1>Orders</h1>
        <?php include "load-orders.php" ?>
    </div>
    <?php include "../footer.php" ?>
</body>