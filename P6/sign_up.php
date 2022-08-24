<?php
$servername = "localhost";
$username = "root";
$password = "03179568";
$databasename = "GreenMarketDB";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    echo "Connection failed";
} else {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        header("Location: ../error.php?error=Email is not set.");
    }

    if (isset($_POST['username'])) {
        $user = $_POST['username'];
        $sql = "SELECT user FROM users WHERE user ='$user'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            header("Location: P6-sign_up.php?error=Username already exists.");
        }
    } else {
        header("Location: ../error.php?error=Username is not set.");
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        header("Location: ../error.php?error=Password is not set.");
    }

    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    } else {
        header("Location: ../error.php?error=Firstname is not set.");
    }

    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    } else {
        header("Location: ../error.php?error=Lastname is not set.");
    }

    if (isset($_POST['homeaddress'])) {
        $homeaddress = $_POST['homeaddress'];
    } else {
        header("Location: ../error.php?error=Homeaddress is not set.");
    }

    if (isset($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        header("Location: ../error.php?error=City is not set.");
    }

    if (isset($_POST['postalcode'])) {
        $postalcode = $_POST['postalcode'];
    } else {
        header("Location: ../error.php?error=Postalcode is not set.");
    }

    $sql = "INSERT INTO users (user, password, email, first_name, last_name, address, city, postal_code)
    VALUES ('$user', '$password', '$email', '$firstname', '$lastname', '$homeaddress', '$city', '$postalcode')";
    if($conn->query($sql) === TRUE) {
        header("Location: P6-landing_page.html");
    } else {
        header("Location: ../error.php?error=Sql query is false.");
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<body>


</body>

</html>