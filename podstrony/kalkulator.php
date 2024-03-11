<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <div>
<form method="post">
    <label for="number1">Liczba1:</label>
    <input type="number" id="number1" name="number1" required>
    <label for="number2">Liczba2:</label>
    <input type="number" id="number2" name="number2" required>
    <button type="submit" name="submit" value="+">+</button>
    <button type="submit" name="submit" value="-">-</button>
    <button type="submit" name="submit" value="*">*</button>
    <button type="submit" name="submit" value="/">/</button>
</form>

<?php
if (isset($_POST["submit"])) {
    $nr1 = $_POST["number1"];
    $nr2 = $_POST["number2"];
    $operation = $_POST["submit"];
    
    switch ($operation) {
        case '+':
            $result = $nr1 + $nr2;
            break;
        
        case '-':
            $result = $nr1 - $nr2;
            break;
        
        case '*':
            $result = $nr1 * $nr2;
            break;
        case '/':
            if ($nr2 != 0){
                $result = $nr1 / $nr2;
                break;
            }
            else{
                $result = "Nie można podzielić przez 0";
            }
        default:
            $result = "Nieznane działanie";
            break;
    }
    
    echo "Wynik: $result";
}
?></div>
<?php include "../footer.html"?>
</body>
</html>
