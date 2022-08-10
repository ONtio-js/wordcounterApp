<?php
// if(!isset($_SESSION['customer']) && empty($_SESSION['customer']))
// {
//     header("location:sign-in.php");
// }
require_once 'classes/user.class.php';
$wordnum = 0;
$wordnum1 = 0;
$wordnum2 = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $words = $_POST['textarea'];
    $button = $_POST['button'];

    if (isset($button))
    {
        $wordcount = new Wordcount();
        $wordnum = $wordcount->wordcount($words);
        $wordnum1 = $wordcount->charcount($words);
        $wordnum2 = $wordcount->charwithoutspecialchars($words);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XOXO BANK</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><?php echo $_SESSION['customer']?></li>
            </ul>
        </nav>
    </header>
    <form id="form" method="post">
       
        <h3>word counter</h3>
        <textarea id="text" name="textarea" placeholder="Text Here ..."></textarea>
        <div id="display">
        <div >
            <h4>words</h4>
            <div>
                <?php
                echo $wordnum;

                ?>
            </div>
        </div>
           <div>
            <h4>striped chars</h4>
            <div>
            <?php
                echo $wordnum2;
                ?>
            </div>
        </div>
         <div>
            <h4 id="chars">chars<span>with space</span></h4>
            <div>
                <?php
                echo $wordnum1;
                ?>
            </div>
        </div>
        </div>
        <input type="submit" name="button" value="count">

    </form>

</body>
</html>