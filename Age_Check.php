<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age | Check</title>
</head>
<body>
    <h2>Age Check Form</h2>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="text"name="age"><br><br>
        <input type="submit"name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];

        if(empty($name) || empty($age)){
            echo "Please fill all fields";
        }else if($age < 18){
            echo "Sorry $name, you are under 18 ";
        }else{
            echo "Welcome $name";
        }
    }
    ?>
</body>
</html>