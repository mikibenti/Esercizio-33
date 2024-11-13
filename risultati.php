<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultati</title>
</head>
<body>
    <table style ="border: 1px solid black">
    <tr>
        <th style ="color:red;">Codice Fiscale</th>
        <th style ="color:red;">Età</th>
    </tr>
    <tr>
    <?php
        foreach($_SESSION["registrazioni"] as $cf => $eta) {
            echo "<td style='border: 1px solid black'> $cf </td> <td style='border: 1px solid black'> $eta </td></tr>";
        }
    ?>
    </tr>
    </table>
    <p>Età media inserimenti : <?php echo array_sum($_SESSION["registrazioni"]) / count($_SESSION["registrazioni"]); ?></p>
    <a href="form.html">Torna al form</a>
</body>
</html>