<!DOCTYPE html>

<html>

<head>
<link href = "polling.css" type = "text/css" rel = "stylesheet" />
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

file_put_contents("users.txt","\n".$user,FILE_APPEND);
?>


<div>
<h1>
Thank you for signing up! You may now sign in by clicking here!
</h1>
<center>
<form action = "main.php" method = "post" >
<input class = "button" type = "submit" value = "Click this button to start creating polls!">
</form>
</center>
</div>


</body>





</html>

