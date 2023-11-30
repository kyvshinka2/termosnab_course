<!-- php код для отправки отзыва -->
<?php
    $login = $_POST['login'];
    $content = $_POST['content'];

    // проверка на пустые поля 
if(empty($login) || empty($content)) {
    echo "Не оставляйте пустые поля!";
    exit();
}

if($login > 100) {
    echo "Логин не больше 100 символов";
    exit();
}

if($content > 150) {
    echo "Комментарий не больше 150 символов";
    exit();
}

    // подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'termosnab');
$mysql->set_charset('utf8');
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
}
// запрос (запись в бд)
$query = "INSERT INTO Feedback (Log_In, Comment) VALUES ('$login', '$content')";
// выполнение запроса
$result = $mysql->query($query);

  // проверка на пустые поля 
    if ($result) {
        echo "Отзыв успешно сохранен";
        header('Location: ../page/o_companii.php');
    } else {
        echo "Ошибка: ".$sql."<br>" . mysqli_error($mysql);
    }


mysqli_close($mysql);
?>