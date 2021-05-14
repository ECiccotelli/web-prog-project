<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
        <link href="MCPolls.css" type="text/css" rel="stylesheet" />
        <script src="MCPolls.js" type="text/javascript"></script>
</head>

<body>

<?php


$loggedIn = $_SESSION["loggedIn"];
$uname = "NULL";
if($loggedIn)
	$uname = $_SESSION["username"];

$voter = "Mike";
$file = fopen("polls.txt", "r");
?>

<h1 id = "title">Polls</h1>

<div>
<?php
	while (!feof($file)) 
	{
		$line_of_text = fgets($file);
		$info = explode(':', $line_of_text);
		$voters = explode(';', $line_of_text);
		
		if(!in_array($uname, $voters) && $info[0] != "")
		{
		?>
		<div id = "poll">
		<?php

		//if($voter == $voters[1])
			//print "equal";
		//$voter = str_replace(array("\n","\r"),"",$voters[1]);
		//echo $voter;
		
		?>
		<form action = "MCPolls-vote.php" method="post">
			<p id = "pollUname"><?php print $info[1]?></p>
			<p>Poll name: <?php print $info[2]?></p>
			<p>Description: <?php print $info[3]?></p>
			<?php
			for($i = 4; $i < sizeof($info); $i+=2)
			{
				if($info[$i] == "NULL")
					break;
				$buttonID = $info[0].":".$i;
				?><p><input type="radio" name="vote" value="<?php echo $buttonID?>" /><?php print $info[$i]?></p>
				<?php
			}

			?>
		<p><input class = "button" type="submit" name="Submit Vote" /><p>
		</form>
		<?php 
		} 
		?>
		</div>
		
		</br>
		<?php
	}
	fclose($file);
	?>
</div>

<div id = "links">
<a href='viewMyPolls.php'><button id = "viewPollButton">View my polls!</button></a>
<a href='makePoll.php'><button id = "makePollButton">Make a poll here!</button></a>
</div>

<div id = "uname">
<?php

		if($uname === "NULL"){
?>		
			<p id = "log"><?php print "You are not logged in!";?></p>
<?php
		}
		else {
?>		
			<p id = "log"><?php print "Logged in as: ".$uname;?></p>
<?php
		}
?>
    
    <a href='logout-submit.php'><button id = "logoutSubmit">Log out!</button></a>

</div>
    


</body>
</html>