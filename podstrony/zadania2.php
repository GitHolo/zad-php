<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania 2</title>
</head>
<body>
    <h1>Zadania 12.03.2024</h1>
    <!--zad 1-->
    <h2>Zad 1</h2>
    <?php
    for ($i = 1; $i <= 10; $i++){
        echo $i."<br>";
    }?>
    <!--zad 2-->
    <h2>Zad 2</h2>
    <?php
    for ($i = 10; $i >= 1; $i--){
        echo $i."<br>";
    }?>
    <!--zad 3-->
    <h2>Zad 3</h2>
    <?php
    $wynik = 0;
    for ($i = 10; $i >= 1; $i--){
        $wynik+=$i;  
    }
    echo $wynik;
    ?>
    <!--zad 4-->
    <h2>Zad 4</h2>
    <?php
    $nr = 2;
    for ($i = 10; $i >= 1; $i--){  
        echo $nr."<br>";
        $nr+=2;
    }
    ?>
    <!--zad 5-->
    <h2>Zad 5</h2>
    <form method="post">
        <label for="number1">Liczba miesięcy</label>
        <input type="number" id="number1" name="number1" required>
        <label for="number2">Liczba zł co miesiąc</label>
        <input type="number" id="number2" name="number2" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $nr1 = $_POST["number1"];
        $nr2 = $_POST["number2"];
        $suma = 0;
        for ($i = 1; $i <= $nr1; $i++){  
            $suma=($suma+$nr2)*1.08;
        }
        echo "Zgromadzona kwota: ".round($suma, 2)." zł";
    }
    ?>
</body>
<style>
    h2 {
        margin-bottom: 0px;
    } 
</style>
</html>