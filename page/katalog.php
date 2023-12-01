<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Термоснаб - Каталог</title>
    <!-- иконка -->
    <link rel="shortcut icon" href="../img/logotype.png" type="image/x-icon">
    <!-- стили -->
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/katalog.css">
</head>
<body>
    <!-- header -->
    <?php
        session_start();
        require('../php/header-page.php')
    ?>

    <div class="content">
        <div class="bottomInfoHead">
            <p>Вы здесь: => <a href="../inedx.php">Главная страница</a> => Каталог</p>
            <p>Корзина</p>
        </div>
        <br> 

        <!-- каталог -->
        <div class="container">
                    <div class="product">
                        <div class="product-img">
                            <a href="./kotel.php"><img src="../img/котел.jpg" alt="котел"></a>
                        </div>
                        <p class="product-title">
                            <a href="./kotel.php">Котлы</a>
                        </p>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img src="../img/радиатор.png" alt="радиатор"></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Радиаторы</a>
                        </p>
                    </div>
                    <div class="col-md-8 products">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="#"><img src="../img/сварка.jpg" alt="сварка"></a>
                                    </div>
                                    <p class="product-title">
                                        <a href="#">Сварочное оборудование</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 products">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="#"><img src="../img/инструмент.jpg" alt="инструмент"></a>
                                    </div>
                                    <p class="product-title">
                                        <a href="#">Инструменты</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 products">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="#"><img src="../img/трубопровод.jfif" alt="трубопровод"></a>
                                    </div>
                                    <p class="product-title">
                                        <a href="#">Трубопровод</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 products">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="#"><img src="../img/горелка_наддувная.jfif" alt="горелка надувная"></a>
                                    </div>
                                    <p class="product-title">
                                        <a href="#">Горелки надувные</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    <br>
    <!-- подвал футер -->
    <?php
        require('../php/footer-page.php');
    ?>
    
    <!-- шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Comfortaa&family=Play:wght@700&display=swap" rel="stylesheet">
    
    <!-- slider -->
    <script src="./script/slider.js"></script>


</body>
</html>