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

    $len=count($month);

    foreach($month as $val)
    {
        echo "Month: $val<BR>";
    }

    ?>
</body>
</html>