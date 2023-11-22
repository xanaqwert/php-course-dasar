<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="age">Masukan Umur Kamu:</label>
        <input type="number" name="age" id="age" required> <br>
        <input type="submit" value="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $age = $_POST["age"];

        if ($age < 18) {
            echo "Kamu tidak cukup umur untuk masuk ke web ini";
        } else {
            echo "Kamu cukup umur untuk masuk ke web ini";
        }
    }

    ?>
</body>

</html>