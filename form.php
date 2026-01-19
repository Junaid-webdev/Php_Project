<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form</h2>
    <form method="post" >
        Name: <input type="text"name="name"><br><br>
        Age: <input type="number"name="age"><br><br>
        Email <input type="email"name="email">
        <input type="submit"name="submit"value="submit">
    </form>
    <?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
  }
  echo "Output <br>";

  // Name //
  if(!empty($name)){
      echo "Welcome ".$name;
  }else{
      echo "Please Enter Your Name <br>";
  }
  // Age //
  if(empty($age)){
    echo "Please Enter Your Age <br> ";
  }else if($age < 18){
    echo "You are under 18<br>";
  }else{
    echo "Age is valid";
  }

  // email //
  print_r('sadf<br>');
    print_r(strpos($email,"@"));exit;
  if(empty($email)){
    echo "Please Enter Your Email <br>";
  }else if(strpos($email,"@")===false){
    echo "Email must contain @ symbol <br>";
  }else{
    echo "Email is valid <br>";
  }
    ?>
    
</body> 
</html>