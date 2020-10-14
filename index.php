<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="cs1.css">
    <title>BMI</title>
</head>

<body>

    <div class="flex-container">
    <header class="header">
        <br>
        <div class="text1">
        Kalkulator BMI
        </div>
    </header>

    <main class="main">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="naglowek">
        Witaj Użytkowniku! Wprowadź w odpowiednie miejsca swój wzrost i wagę, a dowiesz się czy Twój wskaźnik masy ciała jest prawidłowy. Wartości mające części dziesiętne wprowadź przy użyciu kropki.
        </div>
        <br>
        <br>
        <div class="table_text">
        <table class="table">
        <form action="parse.php" method="POST">    
        <tr>
        <td>
            Waga w kilogramach [kg]:
        </td>
        <td>
            <input type="text" name="masa"/>
        </td>
        </tr>
        <tr>
        <td>
            Wzrost w metrach [m]:
        </td>
        <td>
            <input type="text" name="wzrost"/>
        </td>
        </tr>
        <tr>
            <td colspan="2" class="join"><input type="submit" value="Oblicz" style="width:200px; height:50px; font:16pt Arial;"/></td>
        </tr>
        </form>
        </table>
        </div>
</main>
</div>
</body>

</html>