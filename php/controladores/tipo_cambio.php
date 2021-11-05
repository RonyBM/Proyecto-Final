<?php
$url= "https://api.cambio.today/v1/quotes/USD/GTQ/json?quantity=1&key=11465|muB9BvQZ*SFFUiE6SS5yuOVhnzuE3viS";
$var = file_get_contents($url);
$datos= json_decode($var,true);


var_dump($datos);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
</body>
</html>

