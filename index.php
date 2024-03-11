<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>Strony:</p>
    <ul>
        <?php
            $files = scandir('./podstrony');

            foreach ($files as $file) {
                if (is_file("./podstrony/$file") && pathinfo($file, PATHINFO_EXTENSION)==='php'){
                    echo "<li><a href='./podstrony/$file'>$file</a></li>";
                }
            }?>
    </ul>
</body>
</html>