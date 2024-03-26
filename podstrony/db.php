<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "zadanko";
try {
    $conn = mysqli_connect($host, $user, $pass , $database);

    if(!$conn) {
        echo "nie polaczono";
    }

    else {
        echo "polaczono";
    }
}
catch (mysqli_sql_exception){
    echo "Xd";
}
include "../footer.html";
?>