<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
$a = 15;
$b = 0;
$operation = "add";   // add, sub, mul, div

if ($operation == "add") {
    echo "Addition: " . ($a + $b);

} else if ($operation == "sub") {
    echo "Subtraction: " . ($a - $b);

} else if ($operation == "mul") {
    echo "Multiplication: " . ($a * $b);

} else if ($operation == "div") {

    if ($b == 0) {
        echo "Cannot divide by zero";
    } else {
        echo "Division: " . ($a / $b);
    }

} else {
    echo "Invalid operation";
}
?>

</body>
</html>