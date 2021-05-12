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
    
    $_SESSION["loggedIn"] = false;
    ?>


    <div>
        <h1>
            You are now logged out!
        </h1>
        <center>
        <form action = "signin.php" method = "post" >
            <input class = "button" type = "submit" value = "Click this button to sign in!">
        </form>
        </center>
    </div>


</body>



</html>

