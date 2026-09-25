<?php

// 1. Find the greatest and smallest of three numbers

$num1 = 30;
$num2 = 12;
$num3 = 25;

if ($num1 > $num2 && $num1 > $num3) {
    echo "Greatest: $num1";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "Greatest: $num2";
} else {
    echo "Greatest: $num3";
}

echo "<br>";

if ($num1 < $num2 && $num1 < $num3) {
    echo "Smallest: $num1";
} elseif ($num2 < $num1 && $num2 < $num3) {
    echo "Smallest: $num2";
} else {
    echo "Smallest: $num3";
}

--------------------------------------------------------------

// 2. Check if a number is divisible by 3, 5, both, or none

$num = 30;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "Both";
} elseif ($num % 3 == 0) {
    echo "3";
} elseif ($num % 5 == 0) {
    echo "5";
} else {
    echo "None";
}

--------------------------------------------------------------

// 3. Print odd numbers from 2 to 20 and even numbers from 35 to 7

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) echo $i . " ";
}

echo "<br>";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) echo $i . " ";
}

--------------------------------------------------------------

// 4. Print numbers divisible by 2 and 5 from 50 to 2

echo "<br>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

--------------------------------------------------------------

// 5. Find the reverse of a number

$num = 12345;
$reverse = 0;

while ($num > 0) {
    $last = $num % 10;
    $reverse = $reverse * 10 + $last;
    $num = (int)($num / 10);
}

echo "<br>Reverse: $reverse";

--------------------------------------------------------------

// 6. Find the LCM of two numbers

$a = 8;
$b = 12;
$lcm = $a;

while ($lcm % $b != 0) {
    $lcm += $a;
}

echo "<br>LCM: $lcm";

--------------------------------------------------------------

// 7. Find the HCF of two numbers

$a = 18;
$b = 24;
$hcf = 1;

for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}

echo "<br>HCF: $hcf";

--------------------------------------------------------------

// 8. Multiplication table from 1 to 12

echo "<br>";

for ($i = 1; $i <= 12; $i++) {
    for ($j = 1; $j <= 12; $j++) {
        echo ($i * $j) . " ";
    }
    echo "<br>";
}


// 9. Check whether a number is prime or non-prime

$num = 17;
$count = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $count++;
    }
}

if ($count == 2) {
    echo "Prime";
} else {
    echo "Non-prime";
}

--------------------------------------------------------------

// 10. Print prime numbers from 10 to 50

echo "<br>";

for ($num = 10; $num <= 50; $num++) {

    $count = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }

    if ($count == 2) {
        echo $num . " ";
    }
}

?>