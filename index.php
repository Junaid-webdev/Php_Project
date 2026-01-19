<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Php Form</h2>
    <form method="post">
        Name:  <input type="text" name="name"><br><br>
        Email:  <input type="email" name="email"><br><br>
            Age: <input type="number" name="age"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
    }
    echo "Output" ."<br>";
    echo "Name: " .$name;
    echo "Email: ".$email;
    echo "Age: ".$age;
    ?>
</body>
</html>