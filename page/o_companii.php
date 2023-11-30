<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Термоснаб - О компании</title>
    <!-- иконка -->
    <link rel="shortcut icon" href="../img/logotype.png" type="image/x-icon">
    <!-- стили -->
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/o_companii.css">
</head>
<body>
    <div class="logotypeDiv">
        <img class="logotype" src="../img/logotype.png" alt="логотип ООО Термоснаб">
    </div>
    
    <div class="header">
        <nav>
            <a href="../inedx.html">Главная</a>
            <a href="">О_компании</a>
            <a href="">Каталог</a>
            <a href="./dostavka.html">Доставка_и_оплата</a>
            <a href="">Регистрация</a>
            <a href="">Кабинет</a>
        </nav>
    </div>

    <div class="content">
        <div class="bottomInfoHead">
            <p>Вы здесь: => <a href="../inedx.html">Главная страница</a> => О компании</p>
            <p>Корзина</p>
        </div>

        <h1>Мы предоставляем огромный ассортимент:</h1>
        <div class="assortiment">
            <div class="block-tovar">
                <p>- Радиаторы отопления</p>
                <p>- Насосное оборудование</p>
                <p>- Котлы отопления</p>
                <p>- Электроконвекторы</p>
                <p>- Счетчики воды и счетчики газа</p>
                <p>- Труба металлопластиковая, полипропиленовая и медная</p>
                <p>- Тремометры, манометры</p>
                <p>- Запорная арматура</p>
            </div>
            <div class="block-tovar">
                <p>- Элементы трубопровода</p>
                <p>- Стабилизаторы напряжения</p>
                <p>- Источники бесперебойного питания</p>
                <p>- Баки мембранные</p>
                <p>- Бойлеры косвенного нагрева</p>
                <p>- Бензопилы</p>
                <p>- Печи для бани</p>
            </div>
        </div>
    </div>

    <!-- разделитель -->
    <div class="block-razdel"></div>

    <div class="content">
        <div class="contact">
            <div class="number">
                <h1>Свяжитесь с нами</h1>
                <p>Константин: <a href="">+79043080017</a></p>
                <p>Евгений: <a href="">+79090900302</a></p>
                <p>Роман: <a href="">+79043019501</a></p>
            </div>
            <div class="pochta">
                <h1>Электронная почта</h1>
                <p>E-mail: <a href="">tsnab74@bk.ru</a></p>
            </div>
            <div class="urDannai">
                <h1>Юр. данные</h1>
                <p>ООО «ТЕРМОСНАБ»</p>
                <p>ИНН: 7447279644</p>
                <p>КПП: 744701001</p>
            </div>
        </div>
    </div>

    <!-- разделитель -->
    <div class="block-razdel"></div>
    <br>

    <!-- оставить свой отзыв -->
    <div class="content">
        <div class="block">
            <div class="block-form-otz">
                <h1>Поделитесь впечатлением :3</h1>
                <!-- форма для заполнения -->
                <form class="form" action="../php/otzav.php" method="post">
                    <input type="text" class="form-inp" name="login" id="login" placeholder="Введите логин"><br><br>
                    <input type="text" class="form-inp-2" name="content" id="content" placeholder="Введите отзыв"><br><br>
                    <input type="submit" class="batton" value="Отправить">
                </form>
            </div>
            <div class="block-img">
                <img src="../img/otzav.jpg" alt="Отзывы">
            </div>
        </div>

        <br>
    </div>

    <!-- разделитель -->
    <div class="block-razdel"></div>

    <!-- отзывы -->
    <div class="content">
        <h1>Отзывы клиентов:</h1>
        <div class="otzav">
             <!-- вывод отзывов из бд -->
            <?php
                // подключение к бд
                $mysql = new mysqli('localhost', 'root', '', 'termosnab');
                $mysql->set_charset('utf8');
                if($mysql->connect_error){
                    die("Ошибка: " . $mysql->connect_error);
                }

                $sql = "SELECT Log_In, Comment, Number FROM Feedback";
                $result2 = $mysql->query($sql);
                // вывод отзывов
            ?>
            <p>
                <?php 
                    while ($row = mysqli_fetch_assoc($result2)) {
                        echo "<b>".$row['Log_In']."</b> - ".$row['Number']."<br>";
                        echo $row['Comment']."<br>"."<br>";
                    }

                    mysqli_close($mysql);
                ?>
            </p>
        </div>
    </div>

    <!-- подвал футер -->
    <footer>
        <nav>
            <a href="./inedx.html">Главная</a>
            <a href="./page/o_companii.html">О_компании</a>
            <a href="">Каталог</a>
            <a href="./page/dostavka.html">Доставка_и_оплата</a>
            <a href="">Регистрация</a>
            <a href="">Кабинет</a>
        </nav>
        <p>Все права защищены</p>
        <p>© Kyvshianka Lay</p>
    </footer>

    
    <!-- шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Comfortaa&family=Play:wght@700&display=swap" rel="stylesheet">
    
    <!-- slider -->
    <script src="./script/slider.js"></script>


</body>
</html>