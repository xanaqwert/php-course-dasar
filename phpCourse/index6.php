<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Form Post</h1>
        <form action="index6.php" method="POST">
            <label>Menghitung dari atas</label>
            <input type="text" name="counter_up">
            <input type="submit" name="start">
            <br>
            <label>Menghitung dari bawah</label>
            <input type="text" name="counter_down">
            <input type="submit" name="start2">
        </form>
    </div>

    <?php
    //For loops
    $counter_up = $_POST["counter_up"];

    for ($i = 1; $i <= $counter_up; $i++) {
        echo $i . "<br>";
    }

    $counter_down = $_POST["counter_down"];
    for ($i = $counter_down; $i > 1; $i--) {
        echo $i . "<br>";
    }
    ?>
</body>

</html>