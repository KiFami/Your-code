<?php

    session_start();

    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ". $polaczenie->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

        $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";

        if ($rezulatat = @$polaczenie->query($sql));
        {
            $ilu_userow = $rezulatat->num_rows;
            if($ilu_userow>0)
            {
                $wiersz = $rezulatat->fetch_assoc();
                $_SESSION['user'] = $wiersz['user'];



                $rezulatat->free_result();
                header('location: menu.php');

            } else {


            }
        }

        $polaczenie->close();
    }


?>