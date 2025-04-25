<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>SOAL NO 1 :</h3>";
    echo "Bilangan genap dari 1 sampai 10 : <br> <br>";

    for ($i = 1; $i <= 10; $i++){
        if ($i % 2 == 0){
            echo "$i <br>";
        }
    }
    echo "<br> <br>";

    echo "<h3>SOAL NO 2 :</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Bilangan</th>";
    for ($i = 1; $i <= 10; $i++){
        echo "<th style='background-color: lime'>$i</th>";
    }
    echo "</tr>";
    for ($i = 1; $i <= 10; $i++){
        echo "<tr>";
        echo "<th style='background-color: lime'>$i <br></th> ";
        for ($j = 1; $j <= 10; $j++){
            ($hasil = $i * $j);
            if ($hasil % 2 == 0){
                echo "<td style='background-color: aqua'>$hasil</td>";
            } else {
                echo "<td style='background-color: yellow'>$hasil</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>