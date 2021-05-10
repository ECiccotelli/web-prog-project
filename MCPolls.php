<!DOCTYPE html>
<html>

<head>
        <link href="MCPolls.css" type="text/css" rel="stylesheet" />
        <script src="MCPolls.js" type="text/javascript"></script>
</head>

<body>

<?php

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
		?>
		<div>
		<?php

		//if($voter == $voters[1])
			//print "equal";
		if(!in_array($voter, $voters))
		{
		?>
		<form action = "MCPolls-vote.php" method="post">
			<p>Poll name: <?php print $info[2]?></p>
			<p>By: <?php print $info[1]?></p>
			<p>Description: <?php print $info[3]?></p>
			<?php
			for($i = 4; $i < sizeof($info); $i+=2)
			{
				if($info[$i] == "NULL")
					break;
				$buttonID = $info[0].".".$i;
				?><p><button type="button" id="<?php print $buttonID;?>" onClick = "vote('<?php print $voter; ?>', '<?php print $buttonID; ?>');"><?php print $info[$i]?></button></p>
				<?php
			}

			?>
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


</body>
</html>