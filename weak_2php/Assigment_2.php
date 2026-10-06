<?php

/* =====================================================
   PROFESSIONAL CSS
   ===================================================== */

echo "
<style>

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #f1f5f9;
    color: #1e293b;
}

.container {
    width: 90%;
    max-width: 1100px;
    margin: 40px auto;
}

.header {
    background: linear-gradient(135deg, #0f172a, #2563eb);
    color: white;
    text-align: center;
    padding: 35px;
    border-radius: 16px;
    margin-bottom: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

.header h1 {
    margin: 0;
    font-size: 34px;
}

.header p {
    margin: 8px 0 0;
    color: #dbeafe;
}

.question {
    background: white;
    padding: 28px;
    margin-bottom: 25px;
    border-radius: 14px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.07);
    border-left: 5px solid #2563eb;
}

.question h2 {
    margin-top: 0;
    color: #1d4ed8;
    font-size: 23px;
}

.question h3 {
    color: #334155;
    margin-top: 25px;
}

hr {
    border: none;
    height: 1px;
    background: #e2e8f0;
    margin: 30px 0;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    overflow: hidden;
    border-radius: 10px;
}

th {
    background: #1e40af;
    color: white;
    padding: 13px;
    text-align: center;
}

td {
    padding: 12px;
    border: 1px solid #e2e8f0;
    text-align: center;
}

tr:nth-child(even) {
    background: #f8fafc;
}

tr:hover {
    background: #eff6ff;
}

.result {
    display: inline-block;
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    padding: 12px 18px;
    margin: 8px 5px;
    border-radius: 8px;
}

.result strong {
    color: #1d4ed8;
}

.number {
    display: inline-block;
    background: #2563eb;
    color: white;
    padding: 7px 12px;
    margin: 4px;
    border-radius: 7px;
    font-weight: bold;
}

.footer {
    text-align: center;
    color: #64748b;
    padding: 25px;
}

.pass {
    color: #15803d;
    font-weight: bold;
}

.fail {
    color: #dc2626;
    font-weight: bold;
}

@media (max-width: 700px) {

    .container {
        width: 95%;
    }

    .question {
        padding: 18px;
    }

    .header h1 {
        font-size: 26px;
    }

    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }

}

</style>
";


/* =====================================================
   PAGE CONTAINER
   ===================================================== */

echo "<div class='container'>";


/* =====================================================
   HEADER
   ===================================================== */

echo "
<div class='header'>

    <h1>PHP Assignment 2</h1>

    <p>
        Jamhuriya University of Science & Technology
    </p>

    <p>
        Faculty of Computer & IT | PHP & MySQL
    </p>

</div>
";


/* =====================================================
   QUESTION 1
   ===================================================== */

echo "<div class='question'>";

echo "<h2>Question 1: One Dimensional Array</h2>";

$numbers = array(
    5, -7, 12, 10, -7, 11,
    -6, 12, 1, -7, 2, 9
);

echo "<h3>Array Elements</h3>";

foreach ($numbers as $number) {

    echo "<span class='number'>$number</span>";

}


// Total

$total = 0;

foreach ($numbers as $number) {

    $total = $total + $number;

}

echo "<div class='result'>";
echo "Total = <strong>$total</strong>";
echo "</div>";


// Even total

$evenTotal = 0;

foreach ($numbers as $number) {

    if ($number % 2 == 0) {

        $evenTotal = $evenTotal + $number;

    }

}

echo "<div class='result'>";
echo "Even Total = <strong>$evenTotal</strong>";
echo "</div>";


// Odd total

$oddTotal = 0;

foreach ($numbers as $number) {

    if ($number % 2 != 0) {

        $oddTotal = $oddTotal + $number;

    }

}

echo "<div class='result'>";
echo "Odd Total = <strong>$oddTotal</strong>";
echo "</div>";


// Minimum

$minimum = $numbers[0];

foreach ($numbers as $number) {

    if ($number < $minimum) {

        $minimum = $number;

    }

}

echo "<div class='result'>";
echo "Minimum = <strong>$minimum</strong>";
echo "</div>";


// Maximum

$maximum = $numbers[0];

foreach ($numbers as $number) {

    if ($number > $maximum) {

        $maximum = $number;

    }

}

echo "<div class='result'>";
echo "Maximum = <strong>$maximum</strong>";
echo "</div>";


// Minimum positions

echo "<h3>Minimum Positions</h3>";

foreach ($numbers as $index => $number) {

    if ($number == $minimum) {

        echo "<span class='number'>";
        echo "Position " . ($index + 1);
        echo "</span>";

    }

}


// Maximum positions

echo "<h3>Maximum Positions</h3>";

foreach ($numbers as $index => $number) {

    if ($number == $maximum) {

        echo "<span class='number'>";
        echo "Position " . ($index + 1);
        echo "</span>";

    }

}

echo "</div>";


/* =====================================================
   QUESTION 2
   ===================================================== */

echo "<div class='question'>";

echo "<h2>Question 2: Associative Two Dimensional Array</h2>";

$colors = array(

    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )

);

echo "<table>";

echo "<tr>";
echo "<th>Row</th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $row => $color) {

    echo "<tr>";

    echo "<td><strong>$row</strong></td>";

    echo "<td>";
    echo $color["Red"];
    echo "</td>";

    echo "<td>";
    echo $color["Green"];
    echo "</td>";

    echo "<td>";
    echo $color["Blue"];
    echo "</td>";

    echo "</tr>";

}

echo "</table>";

echo "</div>";


/* =====================================================
   QUESTION 3
   ===================================================== */

echo "<div class='question'>";

echo "<h2>Question 3: Square Two Dimensional Array</h2>";

$matrix = array(

    array(2, -6, 8),

    array(-6, 1, 6),

    array(7, 8, -6)

);


// Display matrix

echo "<table>";

for ($i = 0; $i < 3; $i++) {

    echo "<tr>";

    for ($j = 0; $j < 3; $j++) {

        echo "<td>";
        echo $matrix[$i][$j];
        echo "</td>";

    }

    echo "</tr>";

}

echo "</table>";


// Odd total

$oddTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] % 2 != 0) {

            $oddTotal += $matrix[$i][$j];

        }

    }

}

echo "<div class='result'>";
echo "Odd Total = <strong>$oddTotal</strong>";
echo "</div>";


// Even total

$evenTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] % 2 == 0) {

            $evenTotal += $matrix[$i][$j];

        }

    }

}

echo "<div class='result'>";
echo "Even Total = <strong>$evenTotal</strong>";
echo "</div>";


// Row totals

echo "<h3>Row Totals</h3>";

for ($i = 0; $i < 3; $i++) {

    $rowTotal = 0;

    for ($j = 0; $j < 3; $j++) {

        $rowTotal += $matrix[$i][$j];

    }

    echo "<div class='result'>";
    echo "Row " . ($i + 1);
    echo " = <strong>$rowTotal</strong>";
    echo "</div>";

}


// Column totals

echo "<h3>Column Totals</h3>";

for ($j = 0; $j < 3; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < 3; $i++) {

        $columnTotal += $matrix[$i][$j];

    }

    echo "<div class='result'>";
    echo "Column " . ($j + 1);
    echo " = <strong>$columnTotal</strong>";
    echo "</div>";

}


// Main diagonal

$mainDiagonal = 0;

for ($i = 0; $i < 3; $i++) {

    $mainDiagonal += $matrix[$i][$i];

}

echo "<div class='result'>";
echo "Main Diagonal = <strong>$mainDiagonal</strong>";
echo "</div>";


// Secondary diagonal

$secondaryDiagonal = 0;

for ($i = 0; $i < 3; $i++) {

    $secondaryDiagonal += $matrix[$i][2 - $i];

}

echo "<div class='result'>";
echo "Secondary Diagonal = <strong>$secondaryDiagonal</strong>";
echo "</div>";


// Total

$matrixTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        $matrixTotal += $matrix[$i][$j];

    }

}

echo "<div class='result'>";
echo "Total = <strong>$matrixTotal</strong>";
echo "</div>";


// Minimum

$minimum = $matrix[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] < $minimum) {

            $minimum = $matrix[$i][$j];

        }

    }

}

echo "<div class='result'>";
echo "Minimum = <strong>$minimum</strong>";
echo "</div>";


// Maximum

$maximum = $matrix[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] > $maximum) {

            $maximum = $matrix[$i][$j];

        }

    }

}

echo "<div class='result'>";
echo "Maximum = <strong>$maximum</strong>";
echo "</div>";


// Positions

echo "<h3>Minimum Positions</h3>";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] == $minimum) {

            echo "<span class='number'>";
            echo "Row " . ($i + 1);
            echo ", Column " . ($j + 1);
            echo "</span>";

        }

    }

}


echo "<h3>Maximum Positions</h3>";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] == $maximum) {

            echo "<span class='number'>";
            echo "Row " . ($i + 1);
            echo ", Column " . ($j + 1);
            echo "</span>";

        }

    }

}

echo "</div>";


/* =====================================================
   QUESTION 4
   ===================================================== */

echo "<div class='question'>";

echo "<h2>Question 4: Student Information</h2>";

$students = array(

    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),

    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),

    "CA224" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )

);

echo "<table>";

echo "<tr>";

echo "<th>Student ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";

echo "</tr>";

foreach ($students as $id => $student) {

    echo "<tr>";

    echo "<td><strong>$id</strong></td>";

    echo "<td>";
    echo $student["Name"];
    echo "</td>";

    echo "<td>";
    echo $student["Phone"];
    echo "</td>";

    echo "<td>";
    echo $student["Address"];
    echo "</td>";

    echo "</tr>";

}

echo "</table>";

echo "</div>";


/* =====================================================
   QUESTION 5
   ===================================================== */

echo "<div class='question'>";

echo "<h2>Question 5: Student Transcript</h2>";

$transcript = array(

    "Semester 1" => array(

        array(
            "Course" => "subject1",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        ),

        array(
            "Course" => "subject2",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        ),

        array(
            "Course" => "subject3",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        )

    ),

    "Semester 2" => array(

        array(
            "Course" => "subject1",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0
        ),

        array(
            "Course" => "subject2",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        ),

        array(
            "Course" => "subject3",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40
        )

    )

);


foreach ($transcript as $semester => $subjects) {

    echo "<h3>$semester</h3>";

    echo "<table>";

    echo "<tr>";

    echo "<th>Course</th>";
    echo "<th>CW1</th>";
    echo "<th>MidTerm</th>";
    echo "<th>CW2</th>";
    echo "<th>Final</th>";
    echo "<th>Total</th>";
    echo "<th>Status</th>";

    echo "</tr>";


    foreach ($subjects as $subject) {

        $total =
            $subject["CW1"] +
            $subject["MidTerm"] +
            $subject["CW2"] +
            $subject["Final"];


        if ($total >= 50) {

            $status = "Pass";

        } else {

            $status = "Fail";

        }


        echo "<tr>";

        echo "<td>";
        echo $subject["Course"];
        echo "</td>";

        echo "<td>";
        echo $subject["CW1"];
        echo "</td>";

        echo "<td>";
        echo $subject["MidTerm"];
        echo "</td>";

        echo "<td>";
        echo $subject["CW2"];
        echo "</td>";

        echo "<td>";
        echo $subject["Final"];
        echo "</td>";

        echo "<td><strong>";
        echo $total;
        echo "</strong></td>";

        if ($status == "Pass") {

            echo "<td class='pass'>";
            echo $status;
            echo "</td>";

        } else {

            echo "<td class='fail'>";
            echo $status;
            echo "</td>";

        }

        echo "</tr>";

    }

    echo "</table>";

}

echo "</div>";


/* =====================================================
   FOOTER
   ===================================================== */

echo "
<div class='footer'>
    PHP Assignment 2 | Jamhuriya University of Science & Technology
</div>
";

echo "</div>";

?>