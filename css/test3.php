<?php
    session_start();
    if (isset($_SESSION['num_visit'])) {
        $num_visit = $_SESSION['num_visit'];
        $num_visit++;
    } else {
        $num_visit=1;
    }

    $_SESSION['num_visit'] = $num_visit;

    if (isset($_SESSION['my_array'])) {
        $my_array = $_SESSION['my_array'];
        $my_array[] = '+';
    } else {
        $my_array = array();
        $my_array[] = '+';    
    }
    $_SESSION['my_array'] = $my_array;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Counter</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>The number of time youu visit this pages: <?=$num_visit?></h1>
    </body>
    
</html>