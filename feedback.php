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
        <a href="/record.php">Запись</a>
        <a href="/feedback.php" class="selected">Отзывы</a>
        <a href="/contacts.php">Контакты</a>
    </div>

    <div class="main" style="height: 600px;">
        <div class="maintext" style="top: 20px;">
            <h1 style="padding-bottom: 20px;">Отзывы</h1>

            <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $server = 'eu-cdbr-west-02.cleardb.net';
            $user = 'be04c22eea4e6e';
            $password = '723d485c';

            $dblink = mysqli_connect($server, $user, $password);

            $database = 'heroku_cde042d9d8ac3a3';
            $selected = mysqli_select_db($dblink, $database);

            $query = mysqli_query($dblink, "SELECT name, text, rate FROM feedback WHERE 1");

            while ($row = mysqli_fetch_assoc($query)) {
                echo '<p>' . $row['name'] . '<p>';
                echo '<p style="color: #343434">' . $row['text'] . '<p><br>';
                echo '<p>Оценка: ' . $row['rate'] . '<p><br>';
            }
            ?>

            <form action="" method="post">
                <p>Ваше имя:</p>
                <input type="text" name="name" style="font-size: 24px; margin-bottom: 20px;" required><br>

                <p>Ваш отзыв:</p>
                <textarea type="text" name="text" style="font-size: 24px; margin-bottom: 20px; width: 500px; height: 300px; resize: none;" required></textarea><br>

                <p>Ваша оценка:</p>
                <select style="font-size: 24px; margin-bottom: 20px;" name="rate">
                    <option name="1">1</option>
                    <option name="2">2</option>
                    <option name="3">3</option>
                    <option name="4">4</option>
                    <option name="5">5</option>
                </select><br>

                <button name="send" id="send" type="submit">Отправить</button>
            </form>

        </div>
    </div>

    <?php
    if (isset($_POST['send'])) {
        $query = mysqli_query($dblink, "INSERT INTO feedback (name, text, rate) VALUES ('" . $_POST["name"] . "', '" . $_POST["text"] . "', '" . $_POST["rate"] . "')");
        echo '<script language="javascript">';
        echo 'alert("Отзыв успешно оставлен.")';
        echo '</script>';
        header("Refresh:0");
    }
    ?>

</body>
</html>