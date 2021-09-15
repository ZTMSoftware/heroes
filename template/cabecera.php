<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css\navbar.css" rel="stylesheet" type="text/css">
    <link href="css\main.css" rel="stylesheet" type="text/css">
    <link href="css\footer.css" rel="stylesheet" type="text/css">
    <link href="css\banner.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Heroes</title>
</head>

<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/heroes-php" ?>

    <div class="container">
        <div class="navbar">
            <div class="navbar-logo ">
                <div class="navbar-logo-titulo navbar-hover-primario">
                    <a class="letra" href="http://localhost/heroes-php/index.php">HOST </a>
                </div>
            </div>
            <div class="navbar-heroes ">
                <div class="navbar-heroes-titulo navbar-hover-secundario">
                    <a class="letra" href="http://localhost/heroes-master/heroes.php">HEROES </a>
                </div>
            </div>
            <div class=" navbar-mapas ">
                <div class=" navbar-mapas-titulo navbar-hover-secundario">
                    <a class="letra" href="http://localhost/heroes-master/mapas.php">MAPAS </a>
                </div>
            </div>
            <div class="navbar-streamers ">
                <div class="navbar-streamers-titulo navbar-hover-secundario">
                    <a class="letra" href="http://localhost/heroes-master/streamers.php">STREAMERS </a>
                </div>
            </div>
            <div class="navbar-tierlist ">
                <div class="navbar-tierlist-titulo navbar-hover-secundario">
                    <a class="letra" href="http://localhost/heroes-master/tier_list.php"> TIER LIST </a>
                </div>
            </div>
            <div class="navbar-salir ">
                <div class="navbar-salir-titulo navbar-hover-primario">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
            </div>
        </div>
        <div class="principal__container">