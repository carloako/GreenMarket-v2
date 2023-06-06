<?php
$servername = "localhost";
$username = "root";
$password = "03179568";
$databasename = "GreenMarketDB";
$conn = mysqli_connect($servername, $username, $password, $databasename);

if(!$conn){
    echo "Connection failed";
}
else {
    session_start();
    if(isset($_POST['username']) && isset($_POST['password'])){
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);

    if(empty($username)) {
        header("Location: P5-login.php?error=username is required");
        exit();
    } else if (empty($password)) {
        header("Location: P5-login.php?error=password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users where user='$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['user'] === $username && $row['password'] === $password){
                echo "Logged in!";
                $_SESSION['username'] = $row['user'];
                header("Location: ../index.php");
            } else {
                header("Location: ../index.php?error=Incorrect username or password.");
                exit;
            }
        } else {
            header("Location: ../index.php?error=Incorrect username or password.");
            exit();
        }
    }
}
?>