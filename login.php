<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name: <input type="text"name="name"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    if(empty($name)){
        echo "Please Enter Your UserName<br>";
    }else{
        echo "Welcome $name<br>";
    }

    if(empty($password)){
        echo "Please Enter Your Password";
    }else {
        echo "Your Password is correct";
    }
}
?>
</body>
</html>