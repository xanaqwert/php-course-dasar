<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = "Septian"; //String
    $age = 20; //integer
    $height = 1.75; //float
    $isMarried = true; //boolean
    $hobbies = ["Coding", "Gaming", "Reading"]; //array

    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Height: " . $height . "<br>";
    echo "Is Married: " . ($isMarried ? "Yes" . "<br>" : "No" . "<br>");
    echo "Hobbies: " . implode(",", $hobbies) . "<br>";
    ?>
</body>
</html>