<?php

// $a = 5;
// $b = 10;

// $a += $b;
// echo $a;

// $a = 9;
// $b = 8;

// $a -= $b;
// echo $a;

// $a = 10;
// $b = 3;

// $a *= $b;
// echo $a;

// $a = 6;
// $b = 4;
// $a /= $b;
// echo $a;

// $a = 6;
// $b = 4;
// $a %= $b;
// echo $a;


// $a = 6;
// $b = 4;
// $a **= $b;
// echo $a;


// $balance = 1000;
// $salary = 5000;
// echo "Salary aayi → $salary <br>";
// $balance += $salary;
// echo "Total Paise → $balance <br>";

// echo "Mobile Kharida → 1500 <br>";

// $balance -= 1500;
// echo "Total Paise  → $balance <br>";

// echo "Online Shopping  → 2500 <br>";
// $balance -= 2500;
// echo "Total Paise → $balance <br>";

// echo "Interset Mila → 20% <br>";
// $balance *= 1.20;

// echo "Total Paise → $balance <br>";

$balance = 20000;
$withdraw = 1000;

echo "Current Balance: $balance <br>";

if($withdraw <= 0){
   echo "❌ Invalid amount";
}else if($withdraw > $balance){
    echo "❌ Insufficient balance";
}else {
    $balance -= $withdraw;
    echo "Withdraw Amount: $withdraw <br>";
    echo "Transcation Successfully! <br>";
    echo "Current Balance: $balance";
}
?>
