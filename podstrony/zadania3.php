<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadania 3</title>
</head>
<body>
    <h1>zadania 19.03.2024</h1>
    <div>
    <h2>Zad 1</h2>
    <form method="post">
        <label for="number1">num1</label>
        <input type="number" id="number1" name="number1" required>
        <label for="number2">num2</label>
        <input type="number" id="number2" name="number2" required>
        <label for="number3">num3</label>
        <input type="number" id="number3" name="number3" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    function most($a,$b,$c){
        
        if ($a>$b and $a>$c) {
            echo "największa liczba to: ".$a;
        } elseif ($b>$a and $b>$c) {
            echo "największa liczba to: ".$b;
        } elseif ($c>$b and $c>$a) {
            echo "największa liczba to: ".$c;
        } else {
            echo "nie ma największej liczby";
        }
    }
    if (isset($_POST["submit"])) {
        most($_POST["number1"],$_POST["number2"],$_POST["number3"]);
    }
    ?><br>
    <h2>Zad 2</h2>
    <form method="post">
        <label for="number11">Wzrost:</label>
        <input type="number" id="number11" name="number11" required>
        <button type="submit" name="submit2">Submit</button>
    </form>

    <?php
    function height($a){

        if ($a<=150) {
            echo "NISKI WZROST";
        } elseif ($a>180) {
            echo "WYSOKI WZROST";
        } else {
            echo "ŚREDNI WZROST";
        }
    }
    if (isset($_POST["submit2"])) {
        height($_POST["number11"]);
    }
    ?><br>
    <h2>Zad 3</h2>
    <form method="post">
        <label for="number111">Wzrost w cm: </label>
        <input type="number" id="number111" name="number111" required><br>
        <label for="number222">Waga w kg: </label>
        <input type="number" id="number222" name="number222" required>
        <button type="submit" name="submit3">Submit</button>
    </form>

    <?php
    function bmi($cm,$kg){
        $bmi = round($kg/(($cm /100)**2), 2);
        if ($bmi<=18.5) {
            echo $bmi." ZA MAŁO";
        } elseif ($bmi>=25) {
            echo $bmi." ZA DUŻO";
        } else {
            echo $bmi." OK!";
        }
    }
    if (isset($_POST["submit3"])) {
        $cm = $_POST["number111"];
        $kg = $_POST["number222"];
        bmi($cm,$kg);
    }
    ?><br>
    <h2>Zad 4</h2>
    <form method="post">
        <label for="date1">Data 1: </label>
        <input type="date" id="data1" name="data1" required><br>
        <label for="date2">Data 2: </label>
        <input type="date" id="data2" name="data2" required>
        <button type="submit" name="submit4">Submit</button>
    </form>

    <?php
    function starszaData($data1, $data2) {
        $data1_timestamp = strtotime($data1);
        $data2_timestamp = strtotime($data2);
    
        if ($data1_timestamp < $data2_timestamp) {
            return "Pierwsza data ($data1) jest starsza.";
        } elseif ($data1_timestamp > $data2_timestamp) {
            return "Druga data ($data2) jest starsza.";
        } else {
            return "Obie daty są identyczne.";
        }
    }
        if (isset($_POST["submit4"])) {    
        echo starszaData($_POST['data1'], $_POST['data2']);
    }
    
    ?><br>
    <h2>Zad 5</h2>
    <form method="post">
    <label for="rok">Wprowadź rok: </label>
  <input type="text" name="rok" placeholder="YYYY" pattern="[0-4]{4}" title="Wprowadź 4 cyfry">
  <button type="submit" name="submit5">Submit</button>
</form>

<?php
function year($rok){
    if (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0) {
        echo "<p>Rok $rok jest przestępny.</p>";
    } else {
        echo "<p>Rok $rok nie jest przestępny.</p>";
    }
}

if (isset($_POST['submit5'])) {
    year($_POST['rok']);
}
?><br>
<h2>Zad 6</h2>
<form method="post">
<label for="haslo">Hasło: </label>
<input type="password" name="haslo">
<button type="submit" name="submit6">Submit</button>
</form>
<?php
function password($haslo){
    $noNum = false;
    $noCap = false;
    $noSmall = false;
    $noSpec = false;
    $dlugosc_hasla = strlen($haslo);
    if (!preg_match('/\d/', $haslo)) {
        $noNum = true;
        echo " - brak cyfry ";
    }

    if (!preg_match('/[A-Z]/', $haslo)) {
        $noCap = true;
        echo " - brak dużej litery ";
    }

    if (!preg_match('/[a-z]/', $haslo)) {
        $noSmall = true;
        echo " - brak małej litery ";
    }

    if (!preg_match('/[^A-Za-z0-9]/', $haslo)) {
        $noSpec = true;
        echo " - brak znaku specjalnego ";
    }

    if ($dlugosc_hasla <= 4 || $noNum == TRUE || $noCap == TRUE || $noSmall == TRUE || $noSpec == TRUE) {
        echo "Słabe hasło";
    } elseif ($dlugosc_hasla <= 8) {
        echo "Średnie hasło";
    } else {
        echo "Mocne hasło";
    }

}

if(isset($_POST['submit6'])) {
    password($_POST['haslo']);
    
}
?>
<h2>Zad 7</h2>
    <form method="post">
        <label for="bok1">bok1</label>
        <input type="number" id="bok1" name="bok1" required>
        <label for="bok2">bok2</label>
        <input type="number" id="bok2" name="bok2" required>
        <label for="bok3">bok3</label>
        <input type="number" id="bok3" name="bok3" required>
        <button type="submit" name="submit7">Submit</button>
    </form>

    <?php
function czyTrojkat($a, $b, $c) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Z podanych boków można utworzyć trójkąt.";
    } else {
        echo "Z podanych boków nie można utworzyć trójkąta.";
    }
}

if (isset($_POST["submit7"])) {
    czyTrojkat($_POST["bok1"], $_POST["bok2"], $_POST["bok3"]);
}
?>
    </div>
    <?php include "../footer.html"?>
</body>
</html>