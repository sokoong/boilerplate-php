<?php require_once 'api/config.php';?>
<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="src/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Document</title>
    <meta name="description" content="Document">
    <link rel="apple-touch-icon" sizes="57x57" href="src/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="src/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="src/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="src/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="src/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="src/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="src/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="src/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="src/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="src/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="src/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/img/favicon/manifest.json">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="//at.alicdn.com/t/font_3408279_ta2acixcqi.css" /> -->
    <link rel="stylesheet" href="node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="src/css/default.css" />
    <link rel="stylesheet" href="src/css/style.css?v=<?php echo time() ?>" />
</head>

<body ng-controller="AppController">
    <header>
        <nav>
            <h1><a href="./"><img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt=""></a></h1>
            <ul>
                <li class='sub-menu active'>
                    <a href=""><span>Main Menu</span> <i class='fa fa-angle-down'></i></a>
                    <ul>
                        <li><a href="">Course Layout & Scenery</a></li>
                        <li><a href="">Green Fee & Service Rate</a></li>
                        <li><a href="">Facilities</a></li>
                        <li><a href="">Club Regulations</a></li>
                    </ul>
                </li>
                <li class='sub-menu'>
                    <a href=""><span>Main Menu</span> <i class='fa fa-angle-down'></i></a>
                    <ul>
                        <li><a href="">Room & Rate</a></li>
                        <li><a href="">A-TA-TI Spa</a></li>
                        <li><a href="">Leisure Facilities</a></li>
                        <li><a href="">Business Facilities</a></li>
                        <li><a href="">Gallery</a></li>
                    </ul>
                </li>
                <li><a href="">เมนูภาษาไทย</a></li>
                <li><a href="">Main Menu</a></li>
                <li><a href="">Main Menu</a></li>
                <li><a href="">Main Menu</a></li>
                <li><a href="">Main Menu</a></li>
            </ul>
            <a href="javascript:void(0)" onclick="ap.responsive.menu.toggle()" id='menu-bars'></a>
        </nav>
    </header>