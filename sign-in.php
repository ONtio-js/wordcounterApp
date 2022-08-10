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
        <li> <a href = "sign-up.php"><button class="button">sign up</button></a> </li>
    </ul>
</nav>
    </header>
    <div class="container">
        <form action="includes/sign-in.inc.php" method="post">
            <div>
            <h2>login</h2>
            <div class="input">
                <input type="text" name="customer_id" id="email" placeholder="Customer Id">
            </div>
            <div class="input">
                <input type="password" name="pwd" id="pwd" placeholder="Password">
            </div>
            <input type="submit" value="LOGIN" name="button">
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