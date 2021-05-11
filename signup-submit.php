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

file_put_contents("users.txt","\n".$user,FILE_APPEND);
$_SESSION["loggedIn"] = "True";
$_SESSION["username"] = $username;
?>


<div>
<h1>
Thank you for signing up! You may now sign in by clicking here!
</h1>
<center>
<form action = "MCPolls.php" method = "post" >
<input class = "button" type = "submit" value = "Thank you for signing up! ">
</form>
</center>
</div>


</body>





</html>

