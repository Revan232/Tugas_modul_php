<?php
if(isset($HTTP_POST_VARS["no_induk"]))
{
    setcookie("coookie_no_induk",$HTTP_POST_VARS["no_induk"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h2> Penggunaan Cookies</h2>
    <pre>
        <from action="cookie.php" method="post">
            No. Induk  : <input type="text" name="no_induk" size="10"><input type="submit" name="go" value="GO">
        </from>
        <?php
        if(isset($HTTP_POST_VARS["no_induk"]))
        {
            echo("klik <A href=\"cek_cookie.php\">disini</a> untuk melihat data cookies");
        }
        ?>
    </pre>
</body>
</html>