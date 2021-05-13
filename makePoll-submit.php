<!DOCTYPE html>
<html>
<body>

<?php

        // Start the session
session_start();

$loggedIn = $_SESSION["loggedIn"];
$uname = "NULL";
if($_SESSION["loggedIn"])
	$uname = $_SESSION["username"];




$file = "polls.txt";
$count = 1;
$handle = fopen($file,'r');

while(!feof($handle))
{
	$line = fgets($handle);
	if (!empty($line)){
		$count += 1;
	}
}

fclose($handle);

//print $count;

$poll = $count.":".$uname.":".$_POST["pollname"].":".$_POST["description"].":".
checkEmpty($_POST["val1Input"]).":0:".
checkEmpty($_POST["val2Input"]).":0:".
checkEmpty($_POST["val3Input"]).":0:".
checkEmpty($_POST["val4Input"]).":0:".
checkEmpty($_POST["val5Input"]).":0:".
checkEmpty($_POST["val6Input"]).":0:".
checkEmpty($_POST["val7Input"]).":0:".
checkEmpty($_POST["val8Input"]).":0:".
checkEmpty($_POST["val9Input"]).":0:".
checkEmpty($_POST["val10Input"]).":0;\n"; //."\n";

file_put_contents("polls.txt", $poll, FILE_APPEND);				

function checkEmpty($input)
{
	if($input == "")
		return "NULL";
	else
		return $input;
}

?>
<?php header("Location: ./MCPolls.php"); ?>
</body>
</html>