<?php
    // session_start();
    // header("Location: P9-user_list.php");
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        $xml = simplexml_load_file('private/database.xml');
        $targetID= $_POST["id"];
        $users = $xml->user;
        if ($targetID !== ""){
            foreach($users as $user){
                if ($targetID == $user->id){
                    $user->email = $_POST["e-mail"];
                    $user->password = $_POST["password"];
                    $user->firstname = $_POST["first-name"];
                    $user->lastname = $_POST["last-name"];
                    $user->address = $_POST["home-address"];
                    $user->city = $_POST["city"];
                    $user->postalcode = $_POST["postal-code"];
                    $user->phonenumber = $_POST["phone-number"];
                    break;
                }
            }
        }
        else {
            $checkidexists = true;
            $newid;
            while ($checkidexists){
                $newid = rand(100,999);
                foreach($users as $user){
                    if ($newid == $user->id){
                        $checkidexists = true;
                        break;
                    }
                    else {
                        $checkidexists = false;
                    }
                }
            }
            $newuser = $xml->addChild("user");
            $newuser->addChild("id",$newid);
            $newuser->addChild("email",$_POST["e-mail"]);
            $newuser->addChild("password",$_POST["password"]);
            $newuser->addChild("firstname",$_POST["first-name"]);
            $newuser->addChild("lastname",$_POST["last-name"]);
            $newuser->addChild("address",$_POST["home-address"]);
            $newuser->addChild("city",$_POST["city"]);
            $newuser->addChild("postalcode",$_POST["postal-code"]);
            $newuser->addChild("phonenumber",$_POST["phone-number"]);
        }
        $xml->asXML('private/database.xml');
    ?>
</body>
</html>