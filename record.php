<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Клиника стоматологии</title>
</head>

<body>
    <div class="header">
        <img id="logo" src="/src/logo.jpg" alt="Клиника современной стамотологии">
        <p id="headertxt">Клиника современной стоматологии</p>
        <p id="headernmb">+7 (383) 240-95-35</p>
    </div>

    <div class="navbar">
        <a href="/index.php">Главная</a>
        <a href="/doctor.php">Врачи</a>
        <a href="/licens.php">Лицензии</a>
        <a href="/record.php" class="selected">Запись</a>
        <a href="/feedback.php">Отзывы</a>
        <a href="/contacts.php">Контакты</a>
    </div>

    <div class="main" style="height: 600px;">
        <div class="maintext" style="top: 20px;">
            <h1 style="padding-bottom: 20px;">Запись</h1>

            <form action="" method="post">
                <p>Ваше имя:</p>
                <input type="text" name="name" style="font-size: 24px; margin-bottom: 20px;" required><br>

                <p>Ваш номер телефона:</p>
                <input type="text" name="number" style="font-size: 24px; margin-bottom: 20px;" required><br>

                <p>Выберите врача:</p>
                <select style="font-size: 24px; margin-bottom: 20px;" name="doctor">
                    <option name="Юрий Геннадьевич Полянский">Юрий Геннадьевич Полянский</option>
                    <option name="Лариса Игоревна Полянская">Лариса Игоревна Полянская</option>
                    <option name="Марина Алексеевна Клементова">Марина Алексеевна Клементова</option>
                </select><br>

                <p>Выберите дату:</p>
                <input type="date" name="calendar" style="font-size: 24px; margin-bottom: 20px;" max="2022-06-28" min="2022-06-21" value="2022-06-21"><br>

                <button name="send" id="send" type="submit">Записаться</button>
            </form>

        </div>
    </div>

    <div class="footer" style="top: 750px;">
        <img id="logoft" src="/src/logo.jpg" alt="Клиника современной стамотологии">
        <p id="footerl">Клиника современной стоматологии</p>
        <div id="footertxt">
            <p id="txt">г.Новосибирск, Сакко и Ванцетти 31/2</p>
            <p id="txt">Режим работы: Пн-Пт 09:00-20:00</p>
            <p id="txt">+7 (383) 240-95-35</p>
            <p id="txt">+7 (383) 240-90-05</p>
        </div>
    </div>

    <?php
    $server = 'eu-cdbr-west-02.cleardb.net';
    $user = 'be04c22eea4e6e';
    $password = '723d485c';

    $dblink = mysqli_connect($server, $user, $password);

    $database = 'heroku_cde042d9d8ac3a3';
    $selected = mysqli_select_db($dblink, $database);
    
    if (isset($_POST['send'])) {
        $query = mysqli_query($dblink, "INSERT INTO record (name, number, doctor, date) VALUES ('" . $_POST["name"] . "', '" . $_POST["number"] . "', '" . $_POST["doctor"] . "', '" . $_POST["calendar"] . "')");
        echo '<script language="javascript">';
        echo 'alert("Запись успешно добавлена.")';
        echo '</script>';
    }
    ?>

</body>

</html>