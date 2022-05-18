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

$month = array ('January','February','March','April','May','June','July','August','September','October','November','December');
$daymonth = array ('January' => 31,'February' => 28,'March' => 31,'April' => 30,'May' => 31,'June' => 30,'July' => 31,'August' => 31,'September'=> 30,'October' => 31,'November' => 30,'December' => 31);
;$i = 0;

foreach($daymonth as $val)
{
    echo "$month[$i] - $val <br>";
    $i++;
}

echo "<br>";
$month = array ('January','February','March','April','May','June','July','August','September','October','November','December');
$daymonth = array ('January' => 31,'February' => 28,'March' => 31,'April' => 30,'May' => 31,'June' => 30,'July' => 31,'August' => 31,'September'=> 30,'October' => 31,'November' => 30,'December' => 31);
;$i = 0;

foreach($daymonth as $val)
{
    if($val == 30)
    {
        echo "$month[$i] - $val <br>";
    }
    $i++;
}
?>
</body>
</html>