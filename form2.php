<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Form </title>
</head>
<body>
    <h2>Login Form </h2>
    <form method="post">
        UserName: <input type="text"name="userName"><br><br>
        Password: <input type="text"name="password"><br><br>
        <input type="submit"name="login" value="Login">
    </form>
    <?php
    if(isset($_POST['login'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    }
    if($userName == 'admin' && $password == '123'){
        echo "Login Successfully!";
    }else{
        echo "Invalid username and password";
    }
    if(empty($userName)){
        $userName = "Please Enter Name";
    }else{
        echo "Welcome  " .$userName; 
    }
    if(empty($password)){
        $password = "Enter Password";
    }else{
        echo "This" . $password;
    }
    
    ?>
</body>
</html>