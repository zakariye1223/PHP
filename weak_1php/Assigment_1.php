<?php

echo "<h1>PHP Assignment </h1>";



echo "<h2>Question 1: Greatest and Smallest</h2>";

$a = 20;
$b = 10;
$c = 30;

// Greatest
if ($a >= $b && $a >= $c) {
    $greatest = $a;
} elseif ($b >= $a && $b >= $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}

// Smallest
if ($a <= $b && $a <= $c) {
    $smallest = $a;
} elseif ($b <= $a && $b <= $c) {
    $smallest = $b;
} else {
    $smallest = $c;
}

echo "Numbers: $a, $b, $c<br>";
echo "Greatest = $greatest<br>";
echo "Smallest = $smallest";




echo "<hr>";
echo "<h2>Question 2: Divisible by 3 and 5</h2>";

$number = 15;

echo "Number = $number<br>";

if ($number % 3 == 0 && $number % 5 == 0) {

    echo "The number is divisible by both 3 and 5";

} elseif ($number % 3 == 0) {

    echo "The number is divisible by 3";

} elseif ($number % 5 == 0) {

    echo "The number is divisible by 5";

} else {

    echo "The number is divisible by none";

}




echo "<hr>";
echo "<h2>Question 3: Odd Numbers from 2 to 20</h2>";

for ($i = 2; $i <= 20; $i++) {

    if ($i % 2 != 0) {
        echo $i . " ";
    }

}

echo "<h2>Even Numbers from 35 to 7</h2>";

for ($i = 35; $i >= 7; $i--) {

    if ($i % 2 == 0) {
        echo $i . " ";
    }

}


/* =====================================================
   QUESTION 4
   Divisible by 2 and 5 from 50 to 2
   ===================================================== */

echo "<hr>";
echo "<h2>Question 4: Divisible by 2 and 5</h2>";

for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }

}


/* =====================================================
   QUESTION 5
   Reverse of a Number
   ===================================================== */

echo "<hr>";
echo "<h2>Question 5: Reverse Number</h2>";

$number = 12345;
$reverse = 0;

echo "Original Number = $number<br>";

while ($number > 0) {

    $digit = $number % 10;

    $reverse = ($reverse * 10) + $digit;

    $number = (int)($number / 10);
}

echo "Reverse = $reverse";


/* =====================================================
   QUESTION 6
   LCM
   ===================================================== */

echo "<hr>";
echo "<h2>Question 6: LCM</h2>";

$a = 8;
$b = 12;

$lcm = $a;

while ($lcm % $a != 0 || $lcm % $b != 0) {

    $lcm++;

}

echo "Numbers: $a and $b<br>";
echo "LCM = $lcm";


/* =====================================================
   QUESTION 7
   HCF
   ===================================================== */

echo "<hr>";
echo "<h2>Question 7: HCF</h2>";

$a = 18;
$b = 24;

$hcf = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {

    if ($a % $i == 0 && $b % $i == 0) {

        $hcf = $i;

    }

}

echo "Numbers: $a and $b<br>";
echo "HCF = $hcf";


/* =====================================================
   QUESTION 8
   Multiplication Table 1-12
   ===================================================== */

echo "<hr>";
echo "<h2 style='text-align:center;'>Question 8: Multiplication Table</h2>";

echo "<table border='1' cellspacing='0' cellpadding='8'
style='margin:auto; border-collapse:collapse; text-align:center;'>";

for ($i = 1; $i <= 4; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>";
        echo $i * $j;
        echo "</td>";

    }

    echo "</tr>";

}

echo "</table>";


/* =====================================================
   QUESTION 9
   Prime or Non-Prime
   ===================================================== */

echo "<hr>";
echo "<h2>Question 9: Prime or Non-Prime</h2>";

$number = 17;
$count = 0;

for ($i = 1; $i <= $number; $i++) {

    if ($number % $i == 0) {

        $count++;

    }

}

echo "Number = $number<br>";

if ($count == 2) {

    echo "$number is Prime";

} else {

    echo "$number is Non-Prime";

}


/* =====================================================
   QUESTION 10
   Prime Numbers from 10 to 50
   ===================================================== */

echo "<hr>";
echo "<h2>Question 10: Prime Numbers from 10 to 50</h2>";

for ($number = 10; $number <= 50; $number++) {

    $count = 0;

    for ($i = 1; $i <= $number; $i++) {

        if ($number % $i == 0) {

            $count++;

        }

    }

    if ($count == 2) {

        echo $number . " ";

    }

}

?>