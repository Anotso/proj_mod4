<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>MODELO HTMl</title>
        <!-- BOOTSTRAP 4.1 -->
            <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css"/>
            <script src="bs/jquery/jquery-3.3.1.slim.min.js"></script>
            <script src="bs/popper/popper.min.js"></script>
            <script src="bs/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- CSS PRÓPRIO -->
            <link rel="stylesheet" type="text/css" href="recursos/css/estilo.css"/>
    </head>
    <body>
        <?php
            $us = "";
            session_start();
            /*if (isset($_SESSION["usuario"])){*/
                require_once "include/navlogout.html";
                echo    "<div class='container'>
                            ";
                require_once 'include/contpainel.html';
                echo        "
                    </div>";
            /*}else{
                header('Location: login.html');
            }*/
        ?>
        <footer>
        </footer>
    </body>
</html>