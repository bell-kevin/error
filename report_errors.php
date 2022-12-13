<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reporting Errors</title>
</head>

<body>
    <h2>Kevin Bell - Testing Error Reporting</h2>
    <?php
    //show Errors
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    //create a function
    foreach ($var as $v) {
    }
    $result = 1 / 0;
    ?>
</body>

</html>
