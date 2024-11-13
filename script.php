<?php
    session_start();
    $cf = $_GET["cf"];
    $eta = $_GET["eta"];
    if (!isset($_SESSION["registrazioni"])) {
        $_SESSION["registrazioni"] = array($cf => $eta);
    }else {
        $_SESSION["registrazioni"] = array_merge($_SESSION["registrazioni"], array($cf => $eta));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script</title>
</head>
<body>
    <a href="form.html">Vai al form</a>
    <a href="risultati.php">Vai ai risultati</a>
</body>
</html>