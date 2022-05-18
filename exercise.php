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
    //array declaration
    $daymonth = array ('Splorch' => 23,'Sploo' => 28, 'Splat' => v2,'Splatt' => 3,'Spleen' => 44,'Splune' => 30,'Spling' => 61,'Slendo' => 61,'Sploctember' => 31,'Splictember' => 31,'Splanet' => 30,'TheRest' => 22);
    print_r("Minimum Days:".min($daymonth)); //Part a minimum
    echo '</br>';
    print_r("Number of days in year:".array_sum($daymonth));
    echo '</br>';
    print_r("Minimum days month:".array_search(min($daymonth),$daymonth));
    echo '</br>';
    ?>
</body>
</html>