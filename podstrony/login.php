<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "htc";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie i rejestracja</title>
</head>
<body>
    <h2>Logowanie</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="login">Login:</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="password">Hasło:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Zaloguj">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE login='$login' AND pass='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Zalogowano";
        } else {
            echo "Błędny login lub hasło";
        }
}?>
    <h2>Rejestracja</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="reg_login">Login:</label><br>
        <input type="text" id="reg_login" name="login"><br>
        <label for="reg_password">Hasło:</label><br>
        <input type="password" id="reg_password" name="password"><br><br>
        <input type="submit" name="register" value="Zarejestruj">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
    
        $check_query = "SELECT * FROM login WHERE login='$login'";
        $check_result = $conn->query($check_query);
    
        if ($check_result->num_rows > 0) {
            echo "Użytkownik o podanym loginie już istnieje";
        } else {
            $insert_query = "INSERT INTO login (login, pass) VALUES ('$login', '$password')";
            if ($conn->query($insert_query) === TRUE) {
                echo "Nowy użytkownik został zarejestrowany pomyślnie";
            } else {
                echo "Błąd podczas rejestracji: " . $conn->error;
            }
        }
    }
    ?>
</body>
</html>
