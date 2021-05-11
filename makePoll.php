<!DOCTYPE html>
<html>

<head>
        <link href="MCPolls.css" type="text/css" rel="stylesheet" />
        <script src="MCPolls.js" type="text/javascript"></script>
</head>

<body>

        <?php
        // Start the session
        session_start();
        $loggedIn = $_SESSION["loggedIn"];
        if(!$loggedIn)
        {
            header("Location: signin.php");
            exit;
        }
        $uname = $_SESSION["username"];
	        
        ?>

        <h1>Make a Poll below!</h1>
        <div>
            

            <form action="makePoll-submit.php" method="post">
            <fieldset>
            <span>Name your poll:</span>
            <input id="name" name = "pollname" type="text" size="20" />
            <br />
            <span>Brief description:</span>
            <input id="description" name="description" type="text" size="200" />
            <br />
            <span id="name">Number of values in your poll (no more than 10):</span>
            <input id="valCount" type="text" size="2" />
            <button type="button" id="valButton">Add Values</button>
            <button type="button" id="clearButton">Clear</button>
            <br />
            <span id="val1"></span>
            <input id="val1Input" name = "val1Input" type="text" size="20" />
            <br />
            <span id="val2"></span>
            <input id="val2Input" name = "val2Input" type="text" size="20" />
            <br />
            <span id="val3"></span>
            <input id="val3Input" name = "val3Input" type="text" size="20" />
            <br />
            <span id="val4"></span>
            <input id="val4Input" name = "val4Input" type="text" size="20" />
            <br />
            <span id="val5"></span>
            <input id="val5Input" name = "val5Input" type="text" size="20" />
            <br />
            <span id="val6"></span>
            <input id="val6Input" name = "val6Input" type="text" size="20" />
            <br />
            <span id="val7"></span>
            <input id="val7Input" name = "val7Input" type="text" size="20" />
            <br />
            <span id="val8"></span>
            <input id="val8Input" name = "val8Input" type="text" size="20" />
            <br />
            <span id="val9"></span>
            <input id="val9Input" name = "val9Input" type="text" size="20" />
            <br />
            <span id="val10"></span>
            <input id="val10Input" name = "val10Input" type="text" size="20" />
            <br />
            <input type="submit" name="Log In" /> <br />
            <input type="reset" name="clear" /> <br />
            </fieldset>
            </form>
        </div>

    
</body>
</html>