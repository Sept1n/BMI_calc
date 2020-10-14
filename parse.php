<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="cs1.css">
    <title>Wynik</title>
</head>

<body>

<div class="flex-container">
    <header class="header">
        <div class="text1">
        Kalkulator BMI
        </div>
    </header>
        <br>
        <br>
        <br>
        <br>
        <br>

<?php

$masa = $_POST['masa'];
$wzrost = $_POST['wzrost'];

if ($wzrost > 2.5 || $masa > 400 || $wzrost < 0.5 || $masa < 5){
    echo<<<END

    <div class="naglowek">Dane spoza zakresu<p>0.5-2.5 metra i/lub 5-400 kilogramów</p></div>

        <br />
        <br />

        <a href="index.php"> <div class="naglowek"> Powrót do kalkulatora </div> </a>

END;
    }

else {    

if (is_numeric($masa) && is_numeric($wzrost))
    {
        $BMI = $masa/($wzrost*$wzrost);
        if ($BMI <18 ){
echo<<<END

<div class="naglowek">Twoje BMI to: <p class="niedowaga">$BMI</p></div>

<br />

<img  src="BMI.gif" class="image">

<br />
<br />

<a href="index.php"> <div class="naglowek"> Powrót do kalkulatora </div> </a>

END;
    }
    if ($BMI>=18 && $BMI<24 ){
echo<<<END
        
<div class="naglowek">Twoje BMI to: <p class="norma">$BMI</p></div>
        
<br />
        
<img src="BMI.gif" class="image">

<br />
<br />

<a href="index.php"> <div class="naglowek"> Powrót do kalkulatora </div> </a>
        
END;
}
    if ($BMI>=24 && $BMI<30 ){
echo<<<END
                
<div class="naglowek">Twoje BMI to: <p class="nadwaga">$BMI</p></div>
                
<br />
                
<img src="BMI.gif" class="image">

<br />
<br />

<a href="index.php"> <div class="naglowek"> Powrót do kalkulatora </div> </a>
                
END;
}
    if ($BMI>=30 && $BMI<40 ){
echo<<<END
                        
<div class="naglowek">Twoje BMI to: <p class="otylosc">$BMI</p></div>
                        
<br />
                        
<img src="BMI.gif" class="image">

<br />
<br />

<a href="index.php"> <div class="naglowek"> Powrót do kalkulatora </div> </a>
                        
END;
}
    if ($BMI >= 40 ){
echo<<<END
                                
<div class="naglowek">Twoje BMI to: <p class="powazna_otylosc">$BMI</p></div>
                                
<br />
                                
<img src="BMI.gif" class="image">

<br />
<br />

<a href="index.php"> <div class="naglowek"> Powrót do kalkulatora </div> </a>                                
END;
}}
                                                            
                            
                            
            
else {
    echo<<<END

    <div class="naglowek">Błędny format danych</div>

        <br />
        <br />

        <a href="index.php"> <div class="naglowek"> Powrót do kalkulatora </div> </a>

END;
    }
}

?>

<br>
<br>
<br>
 
</body>

</html>