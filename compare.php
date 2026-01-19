<?php

// $age = 19;

// if($age >= 18){
//     echo "You are Eligibale";
// }else{
//     echo "You are a minor";
// }

// $marks = 56;
// if($marks >= 40){
//     echo "You can go next class";
// }else{
//     echo "Sry Are you fail";
// }

// $salary = 240000;

// if($salary > 25000){
//     echo "Tax Applicable";
// }else{
//     echo "No Tax";
// }

// $age = 27;
// $marks = 70;
// $city = "Delhi";

// if($age > 18){
//     echo "Your age is perfect <br>";
// }else{
//     echo "You are a minor <br>";
// }

// if($marks >= 70){
//     echo "Your marks are perfect for admission: <br>";
// }else{
//      echo "You are not allowed, your marks are too low: <br>";
// }

// if($city != "Mumbai"){
//     echo "You are a form , Please come";
// }else{
//     echo "You are not allowed because you are form another city <br>";
// }

// $age = 21;
// $marks = 40;
// $city = "Delhi";

// if($age >= 18 && $marks >= 60 && $city != "Delhi"){
//     echo "Admisson Confirmed";
// }else{
//     echo "Admisson Rejected";
// }

// $age = 85;
// $experience = 45;
// $city = "Mumbai";

// if($age >=21 && $age <= 35 && $experience >= 2 && ($city =="Mumbai" || $city == "Delhi") ){
//     echo "You are eligible for the job";
// }else{
//     echo "You are not eligible for the job";
// }


// $speed = 60;
// $helmet = "yes";
// $license = "yes";

// if($speed >= 80 && $speed <= 80 &&  $helmet == "yes" && $license == "yes" ) {
//     echo "You can a safe drive";
// }else{
//     echo "❌ Challan Generated
// Reason: Overspeed / No Helmet / No License";
// }

// $totalAmount = 5770;
// $isMember = "yes";
// $coupon = "sanove10";

// if($totalAmount >= 3000 && ($isMember == "yes" || $coupon == "save10")){
//     $discount = $totalAmount * 0.10;
//     $finalAmount = $totalAmount - $discount;

//     echo "Discount Applied: ₹$discount <br>";
//     echo "Final Amount: ₹$finalAmount";
// }else{
//     echo "No Discount <br>";
//     echo "Toral Amount: ₹$totalAmount";
// }

$balance = 5000;
$withdraw = 20000;
$pin = '1234';
$enterPin = '1234';

// if($balance >= $withdraw &&  $balance -= $withdraw &&($withdraw != 0) && ($pin == '1234' || $enterPin == '1234')){
//     echo "✅ Transaction Successful<br>";
//     echo "Withdrawn Amount: $withdraw<br>";
//     echo "Remaining Balance: $balance<br>";
// }


// $balance = 5000;
// $withdraw = 90000;
// $pin = '1234';
// $enterPin = '1234';

// if($enterPin != $pin){
//     echo "Wrong Pin";
// }else if($withdraw <= 0){
//     echo "Invalid Amount";
// }else if($withdraw > $balance){
//       echo "❌ Insufficient Balance";
// }else {
//     $balance = $balance - $withdraw;
//        echo "✅ Transaction Successful <br>";
//         echo "Withdrawn Amount: ₹$withdraw <br>";
//         echo "Remaining Balance: ₹$balance";
// }

$username = "Musraf";
$password = '1234';
$role = 'admin';

$correctUser = "Musraf";
$correctpassword = '1234';

if(empty($username)){
     echo "❌ Username required";
}else if(empty($password)){
      echo "❌ Password required";
}else if($username != $correctUser || $password != $correctpassword){
        echo "❌ Invalid credentials";
}else{
    if($role == 'admin'){
        echo "Welcome Admin $username";
    }else{
        echo "Welcome User $username";
    }
}
