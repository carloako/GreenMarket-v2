<?php
    // session_start();
    header("Location: P9-user_list.php");
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        $xml = simplexml_load_file('../database.xml');
        $users = $xml->user;
        $targetEmail= $_POST["email"];
        echo "$targetEmail";
        foreach($users as $user){
            if ($targetEmail == $user->email){
                $dom = dom_import_simplexml($user);
                $dom->parentNode->removeChild($dom);
                break;
            }
        }
        $xml->asXML('../database.xml');
    ?>
</body>
</html>