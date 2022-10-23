<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML,CSS,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Menu SilCraft</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/x-icon" href="PIC/tshirt.ico">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');
        </style>
    </head> 
    <body>

<?php

    echo "<p>Witaj ".$_SESSION['user']."!";

?>
    </body>
</html>