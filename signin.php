<DOCTYPE! html>

<html>
<head>
<link href = "MCPolls.css" type= "text/css" rel ="stylesheet" />
</head>
<body id = "account">
    <h1 class = "cen">
        Sign in Page!
    </h1>

    <form action="signin-submit.php" method="post">

        <div class = "login">


        <h1> LOGIN </h1>
        <p>
        <strong>UserName:</strong>
        <input class="field" type="text" name="username" size="16"  required />

        <br />

        <strong>Password:</strong>
        <input class="field" type="password" name="password" size="16" required />
        </p>

        <input class = "button" type="submit" value="LOG IN">

        <button class = "signUp">
            <a href = "signUp.php"> Create a new account! </a> 
        </button>



        </div>
    </form>

</body>



</html>

