<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrosesan file</title>
</head>
<body>
    <h2> pemeriksa file</h2>
    <?php
    $file='D:\\Text.txt';
    if(file_exists($file))
    {
        echo("file <b> $file </b> sudah ada !");
    }else
    {
        echo("file <b> $file </b> sudah ada !");
    }
    
    ?>
    
</body>
</html>