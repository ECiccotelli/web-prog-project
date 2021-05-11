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
        $file = fopen("polls.txt", "r");
        $loggedIn = $_SESSION["loggedIn"];
        if($loggedIn)
	        $uname = $_SESSION["username"];
        ?>
        <h1 id = "title">My Polls</h1>
        <div>
        <?php
            while (!feof($file)) 
            {
                $line_of_text = fgets($file);           
                $info = explode(':', $line_of_text);
                $voters = explode(';', $line_of_text);
        ?>
            
            <?php   
            if ($info[0] != ""){  
                if($info[1] === $uname)
                {

            ?>
                    <div id = "poll">
                        <p>Poll name: <?php print $info[2]?></p>
                        <p>By: <?php print $info[1]?></p>
                        <p>Description: <?php print $info[3]?></p>
            <?php
                for($i = 4; $i < sizeof($info); $i+=2)
                {
                    if($info[$i] == "NULL")
                        break;
                    $votes = $info[$i + 1];
			?>
                    <p><b><?php print $votes?></b> <?php print $info[$i]?></p>
			<?php
			    }
			?>
            <?php 
                    }
                }
            ?>
                </div>
                </br>
        <?php
            }
            fclose($file);
        ?>
        </div>
        <div id = "uname">
        <p><?php print "Logged in as: ".$uname;?></p>
        </div>

<div id = "links">
<a href='MCPolls.php'><button id = "viewMainPolls">View all polls!</button></a>
<a href='makePoll.php'><button id = "makePollButton">Make a poll here!</button></a>
</div>

</body>
</html>