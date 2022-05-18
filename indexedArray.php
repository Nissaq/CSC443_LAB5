<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php #Script handle form

    $month = array ('January','February','March','April','May','June','July','August','September','October','November','December');

    /*Only retrieves the value for the current element and ignores the key*/

    foreach ($month as $val)
    {
        echo "Month: $val<BR>";
    }

    sort($month);
    
    ?>
</body>
</html>