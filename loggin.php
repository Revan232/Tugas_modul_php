<?php
session_start();

if(isset($HTTP_POST_VARS["insert"]))
{
    if(($HTTP_POST_VARS["user"]!="")&&($HTTP_POST_VARS["password"]!=""))
    {
        $_session_register("session_status");
        $_session_register("session_user");
        $_session_register("session_password");
        $session_status="login";
        $session_user=$HTTP_POST_VARS["user"];
        $session_password=$HTTP_POST_VARS["password"];
        header("Location: proses_loggin.php");
        exit;

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h2> Penggunaan session</h2>
    <pre>
        <form action="loggin.php" method="POST">
            User Name     :  <input Type="text" name="user" size="15">
            Password      :  <input Type="password" name="password" size="15">
                             <input Type="hidden" name="insert">
                             <input Type="submit" name="loggin" value="loggin">
        </form>
    
</body>
</html>