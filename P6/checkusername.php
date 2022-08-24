<?php
include '../mysqlconnect.php';

if (!$conn) {
    echo "Connection failed";
} else {
    $username = $_GET['username'];
    $sql = "SELECT user FROM users WHERE user = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "true";
    } else {
        echo "false";
    }
}

include '../mysqldisconnect.php';
?>