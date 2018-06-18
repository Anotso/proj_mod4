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
            <link rel="stylesheet" type="text/css" href="recursos/css/estilo2.css"/>
    </head>
    <body>
        <header>
            <?php
                $us = "";
                session_start();
                if (isset($_SESSION["usuario"])){
                    require_once "include/navlogout.html";
                }else{
                    require_once "include/navlogin.html";
                }
            ?>
        </header>
        <div class="container">
            <div class="principal">
                <?php
                    require_once "include/pesq.html";
                ?>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html>