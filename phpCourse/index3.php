<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Contoh form post</h1>
        <form action="index3.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required> <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required> <br>

            <input type="submit" value="submit">
        </form>
    </div>

    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "name:" . $name . "<br>";
    echo "email:" . $email . "<br>";
    ?>
</body>

</html>