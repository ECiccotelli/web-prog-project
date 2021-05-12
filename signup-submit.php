<!DOCTYPE html>

<html>

<head>
    <link href = "MCPolls.css" type = "text/css" rel = "stylesheet" />
</head>


    <body>
    <?php

    $username = $_POST["username"];
    $user = $username;


    foreach($_POST as $key => $value){
        if($key != "username"){
            $user = $user.",".$value." ";
        }

    }
        
    foreach (file("users.txt", FILE_IGNORE_NEW_LINES) as $storedUsers) {
        list($prevUsername, $prevPassword) = explode(",", $storedUsers);

        $username = trim($username);
        $prevUsername = trim($prevUsername);
        $prevPassword = trim($prevPassword);
        $taken = false;

        if( (strcmp($username, $prevUsername) == 0)) {
            echo "ERROR! Username already taken. Please try signing up again with a different username. ";
            $taken = true;
            echo $taken;
            break;
        }
    }
    
        
    if(!$taken) //If successfully signed up
    {
        file_put_contents("users.txt","\n".$user,FILE_APPEND);
        $_SESSION["loggedIn"] = false;
        $_SESSION["username"] = $username;
        echo "Successfully signed up!";
        ?>
        <div>
            <h1>
                Thank you for signing up!
            </h1>
        </div>
        <center>
            <form action = "MCPolls.php" method = "post" >
                <input class = "button" type = "submit" value = "Thank you for signing up! Click here to start creating polls!">
            </form>
        </center>
        <?php
        
        
    }
    else //If sign up failed
    {
         ?>
        <center>
            <form action = "signup.php" method = "post" >
                <input class = "button" type = "submit" value = "Please go back and try signing up again!">
            </form>
        </center>
        <?php
    }

    ?>


    </body>

</html>

