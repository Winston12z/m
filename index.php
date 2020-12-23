
<?php

    error_reporting();

    require_once "core/init.php";
    require_once "vendor/autoload.php";

    use classes\Config;
    use classes\DB;
    use models\User;

    $db = DB::getInstance();
    
    $u = new User($db);
    $u->setData("davincii", "password", "salt", "leonardo", "davincii", date("Y/m/d h:i:s"), "garbage");

    echo $u->add();

    $db->query("SELECT * FROM user_info");

    $users = $db->results();

    foreach($users as $user) {
        echo $user->username . "<br>";
    }

    if($db->error()) {
        echo "has error";
    } else {
        echo "There's no error !";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V01D47</title>
    <link rel='shortcut icon' type='image/x-icon' href='assets/images/favicons/favicon.ico' />
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/header.css">
</head>
<body>
    <!-- Here before including the header, we need to make sure if user is already connected. If so
         we need to add connected header, otherwise disconnected header wil be shown
    -->
    <?php //include "components/basic/disconnected-header.php" ?>


</body>
</html>