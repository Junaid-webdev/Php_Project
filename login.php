<?php

// Login User //
$name = "Shyam";
$password = 1234;
$role = "student";

$correctName = "Shyam";
$correctPass = 1234;


// Student Data //

$age = 20;
$marks = 79;
$city = "Delhi";

// Fess Data //

$fess = 50000;
$isScholarship = "yes";
$coupon = "Save10";

// Login Check //

if(empty($name)){
     echo "❌ Username required  <br>";
}else if(empty($password)){
      echo "❌ Password required  <br>";
}else if($name != $correctName || $password != $correctPass){
     echo "❌ Invalid credentials  <br>";
}else{
    if($role == "student"){
           echo "Welcome Student $name  <br>";
    }else{
           echo "Welcome User $name  <br>";
    }
}

// Student Data //

if($age >= 18 && $age <= 26 && $marks >= 60 && ($city != "Mumbai") ){
    echo "Your Data Perfect <br>";
}else{
    echo "Sry Aapka data shi nhi hai  <br>";
}

if($fess >= 50000 && ($isScholarship == 'yes' || $coupon == "Save10") ){
    $discount = $fess * 0.10;
    $final = $fess - $discount;
      echo "Login Successful <br>";
      echo "Your fess discount $discount<br>";
    echo "Welcome Student $name<br>";
    echo "Admission Confirmed<br>";
    echo "Final Fees: ₹$final";
}else{
  echo "Admission Rejected";
}