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


foreach (file("users.txt", FILE_IGNORE_NEW_LINES) as $storedUsers) {
	list($prevUsername, $prevPassword) = explode(",", $storedUsers);
    
    $username = trim($username);
    $pw = trim($pw);
    $prevUsername = trim($prevUsername);
    $prevPassword = trim($prevPassword);
    
    if( (strcmp($username, $prevUsername) == 0) && (strcmp($pw, $prevPassword) == 0)) {
        echo "Successfully logged in!";
        $_SESSION["loggedIn"] = "True";
        $_SESSION["username"] = $username;
        echo "User is now logged in and loggedIn is set.";
        print_r($_SESSION["loggedIn"]);
    }
}
    
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


</body>





</html>

