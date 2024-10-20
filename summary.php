<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_GET["name"];
        $surname = $_GET["surname"];
        $email = $_GET["email"];
        echo "<h1> Dati inviati! </h1>";
    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
        </tr>
        <?php
            echo "<tr> <td> $name </td> <td> $surname </td> <td> $email </td> </tr>";
        ?>
    </table>
</body>
</html>