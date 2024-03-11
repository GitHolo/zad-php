<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania</title>
</head>
<body>
<?php echo "Hello World!\n";
    $wynik = 23/7;

    $x = 57;
    $y = 208;

    $iloczyn = $x *$y;
    $suma = $x+$y;
    $rbit = $x ^ $y;
?>
    <p><?php echo $wynik;?><br>
    <?php echo $iloczyn, "\n", $suma,"\n", decbin($rbit)?>

    </p>
    <p>
        <!--zad 1-->
        <?php
        $a = 10;
        $b = 2;

        if ($b != 0) {
            $result = $a / $b;
            echo "Wynik równania x = a / b to: " . $result;
        } else {
            echo "Nie można dzielić przez zero. Proszę podać inną wartość dla b.";
        }
        ?><br>
        <!--zad 2-->
        <?php
        $a = 10;
        $b = 2;
        $c = 10;
        $d = 2;
        if ($b != 0 or $d != 0) {
            $result = $a / $b + $c / $d;
            echo "Wynik równania x = a / b + c / d to: " . $result;
        } else {
            echo "Nie można dzielić przez zero. Proszę podać inną wartość dla b lub d.";
        }
        ?><br>
        <!--zad 3-->
        <?php
        $a = 4;
        $b = 6;
        if ($b != 4) {
            $result = ($a+6)/($b-4);
            echo "Wynik równania x = ($a+6)/($b-4) to: " . $result;
        } else {
            echo "Nie można dzielić przez zero. Proszę podać inną wartość dla b";
        }
        ?><br>
        <!--zad 4-->
        <?php
        $a = 4;
        if ($a%2==0) {
            echo "Liczba jest parzysta";
        } else {
            echo "Liczba jest nieparzysta";
        }
        ?><br>
        <!--zad 5-->
        <form method="post">
            <label for="number1">Liczba1:</label>
            <input type="number" id="number1" name="number1" required>
            <label for="number2">Liczba2:</label>
            <input type="number" id="number2" name="number2" required>
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php
        if (isset($_POST["submit"])){
            $nr1 = $_POST["number1"];
            $nr2 = $_POST["number2"];
            if ($nr1%$nr2==0 or $nr2%$nr1==0) {
                echo "Liczby są podzielne przez siebie";
            } else {
                echo "Liczby nie są podzielne przez siebie";
            }
        }

        ?><br>
        <!--zad 6-->
        <?php
        $a = 0;
        if ($a>0) {
            echo "Liczba jest dodatnia";
        } elseif ($a<0) {
            echo "Liczba jest ujemna";
        } else {
            echo "Liczba jest równa 0";
        }
        ?><br>
        <!--zad 7-->
        <?php
        $a = 1;
        $b = 2;
        $c = 1.5;
        if ($a>$b and $a>$c) {
            echo $a;
        } elseif ($b>$a and $b>$c) {
            echo $b;
        } elseif ($c>$b and $c>$a) {
            echo $c;
        } else {
            echo "nie ma największej liczby";
        }
        ?><br>
    </p>
    <?php include "../footer.html"?>
</body>
</html>