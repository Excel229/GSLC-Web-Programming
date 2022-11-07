<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

        $report = array
        (
            "Akreditas Budi = " => 100,
            "Akreditas Anto = " => 85,
            "Akreditas Cencen = " => 65,
            "Akreditas Doni = " => 50
        );
        foreach($report as $name => $rp) 
        {
            echo $name. "";
            if($rp > 85)
            {
                echo "A (LULUS)<br>";
            }
            else if($rp > 75)
            {
                echo "B (LULUS)<br>";
            }
            else if($rp > 65)
            {
                echo "C (LULUS)<br>";
            }
            else
            {
                echo "D (TIDAK LULUS)<br>";
            }
            echo "<br>";
        }
    ?>
    
</body>
</html>