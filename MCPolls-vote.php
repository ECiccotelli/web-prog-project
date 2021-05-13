
<?php
//print($_POST["vote"]);

session_start();
$loggedIn = $_SESSION["loggedIn"];
$uname = "NULL";
if($loggedIn)
	$uname = $_SESSION["username"];
else {
	header("Location: http://localhost/web-prog-project/signin.php");
}

$IDs = explode(":",$_POST["vote"]);
//poll id first number 2.6
$file = "polls.txt";
$handle = fopen($file,'r');

while(!feof($handle))
{
	$line = fgets($handle);
	$lineValues = explode(":",$line);

	if($lineValues[0] == $IDs[0])
	{
		
		$lineValues[$IDs[1] + 1] = strval(intval($lineValues[$IDs[1] + 1]) + 1);
		$replace = implode(":",$lineValues);
		$replace = str_replace("\n",$uname.";\n",$replace); //\r
		//echo $replace;
		fclose($handle);
		$lines = array();
		$handle=fopen('polls.txt', 'r');
		while (!feof($handle))
		{
			$checkLine=fgets($handle);
			$lines[]=$checkLine;
			
		}
		
		fclose($handle);
		for($i = 0; $i < sizeof($lines); $i++)
		{
			if(strcmp($lines[$i], $line) == 0)
			{
				//echo $val;
				echo $replace;
				$lines[$i] = $replace;
				file_put_contents("polls.txt", $lines);
				break;
			}
		}
		break;
	}
}

?>