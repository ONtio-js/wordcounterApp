<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XOXO</title>
    <link rel="stylesheet" href="assets/css/auth.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

</head>
<body>
    <header id="sign-up-header">
<nav>
    <ul>
        <li><a href="index.php"><span class="logo">X<span id="ox">O</span>X<span id="xo">O</span></span></a></li>
        <li> <a href = "sign-in.php"><button class="button">sign in</button></a> </li>
    </ul>
</nav>
    </header>
    <div class="container">
        <form action="includes/sign-up.inc.php" method="post">
            <div>
            <h2>Sign up</h2>
            <h4 class="display-2">register your account</h4>
            <div class="input">
                <input type="email" name="email" id="email" placeholder="Enter Email">
            </div>
            <div class="input">
                <input type="password" name="pwd" id="pwd" placeholder="Password">
            </div>
            <div class="input">
                <input type="password" name="rpwd" id="rpwd" placeholder="Confirm Password">
            </div>
            <input type="submit" value="SIGN UP" name="button">
            </div>
        </form>
    </div>
    <footer>
        <div>
            <P><span>XOXO</span>  alright Reserved &copy;2020 - <?php echo date('Y')?></P>
        </div>
    </footer>
</body>
</html>