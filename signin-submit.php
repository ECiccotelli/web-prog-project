<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <link href = "MCPolls.css" type = "text/css" rel = "stylesheet" />
</head>


<body>
    <?php

    $username = $_POST["username"];
    $pw = $_POST["password"];
    $user = $username;
    $success = false;
    

    foreach (file("users.txt") as $storedUsers) {
        $storedUsers = trim($storedUsers);

        if (!empty($storedUsers))
        {
            list($prevUsername, $prevPassword) = explode(",", $storedUsers);

            $username = trim($username);
            $pw = trim($pw);
            $prevUsername = trim($prevUsername);
            $prevPassword = trim($prevPassword);

            if( (strcmp($username, $prevUsername) == 0) && (strcmp($pw, $prevPassword) == 0)) {
                echo "Successfully logged in!";
                $_SESSION["loggedIn"] = "True";
                $_SESSION["username"] = $username;
                $success = true;
            }
        }

    }
    
    if($success) //If successfully logged in
    {
        ?>
    <div>
        <h1>
            Thank you for signing in! Start creating your polls today!
        </h1>
        <center>
        <form action = "MCPolls.php" method = "post" >
            <input class = "button" type = "submit" value = "Click this button to start creating polls!">
        </form>
        </center>
    </div>
        <?php
    }
    else //If login failed
    {
        ?>
            <div>
        <h1>
            Username or password invalid. Please try signing in again!
        </h1>
        <center>
        <form action = "signin.php" method = "post" >
            <input class = "button" type = "submit" value = "Click this button to go back and try signing in again">
        </form>
        </center>
    </div>
    <?php
    }
    ?>




</body>



</html>

