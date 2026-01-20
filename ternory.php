<?php

$age = 20;
echo $result = ($age >= 18) ? "Adult" : "Minor";

$marks = 40;
echo ($marks >= 40) ? "Pass" : "Fail";

$username = "Junaid";

echo (!empty($username)) ? "Welcome $username" : "Please Enter Your Name";

$balance = 1000;
$withdraw = 1500;

echo ($withdraw <= $balance) ? "Transaction Successful" : "Insufficient Balance";   

$name = 'Junaid';
echo $name ?? "Guest User";