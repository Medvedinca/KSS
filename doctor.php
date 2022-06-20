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
        <a href="/doctor.php" class="selected">Врачи</a>
        <a href="/licens.php">Лицензии</a>
        <a href="/record.php">Запись</a>
        <a href="/feedback.php">Отзывы</a>
        <a href="/contacts.php">Контакты</a>
    </div>

    <div class="main">
        <div class="maintext" style="top: 20px;">
            <h1>Врачи</h1>
        </div>

        <table class="tb" style="margin-top: 100px;">
            <tbody>
                <tr>
                    <td>
                        <div class="img">
                        <img class="scale" src="/src/d1.jpeg" alt="ИМПЛАНТОЛОГИЯ" style="width: 420px;">
                        <h1 id="imgtxt" style="height: 75px; margin-top: 245px;">ЮРИЙ ГЕННАДЬЕВИЧ ПОЛЯНСКИЙ</h1>
                        </div>
                    </td>
                    <td>
                    <div class="img">
                        <img class="scale" src="/src/d2.jpeg" alt="ПРОТЕЗИРОВАНИЕ" style="width: 420px;">
                        <h1 id="imgtxt" style="height: 75px; margin-top: 245px;">ЛАРИСА ИГОРЕВНА ПОЛЯНСКАЯ</h1>
                        </div>
                    </td>
                    <td>
                    <div class="img">
                        <img class="scale" src="/src/d3.jpeg" alt="ХИРУРГИЯ" style="width: 420px;">
                        <h1 id="imgtxt" style="height: 75px; margin-top: 245px;">МАРИНА АЛЕКСЕЕВНА КЛЕМЕНТОВА</h1>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer" style="top: 950px;">
        <img id="logoft" src="/src/logo.jpg" alt="Клиника современной стамотологии">
        <p id="footerl">Клиника современной стоматологии</p>
        <div id="footertxt">
            <p id="txt">г.Новосибирск, Сакко и Ванцетти 31/2</p>
            <p id="txt">Режим работы: Пн-Пт 09:00-20:00</p>
            <p id="txt">+7 (383) 240-95-35</p>
            <p id="txt">+7 (383) 240-90-05</p>
        </div>
    </div>
</body>

</html>