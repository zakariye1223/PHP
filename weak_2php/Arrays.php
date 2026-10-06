<?php

$arr = [3, true, 4, 7, "hello", "world"];

var_dump($arr);


echo "<br>";
echo "<hr>";


$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
if (is_array($number)) {
    echo "This is an array";
}
else {
    echo "This is not an array";
}

echo "<br>";
echo "<hr>";


echo "<h2>Questions: Array Examples</h2>";
$students =["Ahmed", "Mohamed", "Hassan", "Ali", "Abdi"];
echo $students[0] . "<br>";
echo $students[4] . "<br>";
echo $students[2] . "<br>";

echo "<hr>";

foreach ($students as $student) {
    echo $student . "<br>";

}
echo "<hr>";
echo count($students)."<br>";
echo "<hr>";


echo "<h2>Question 3: Personal Information</h2>";
$student =[
    "id" => "CA1230760",
    "name" => "John Doe",
    "email" => "john.doe@example.com"
];

echo "ID: " . $student["id"] . "<br>";
echo "Name: " . $student["name"] . "<br>";
echo "Email: " . $student["email"] . "<br>";
echo "<hr>";
echo "<h4>Associative Array + foreach loop</h4>";
foreach($student as $key => $value) {
    echo $key . ": " . ":" . $value . "<br>";
}
echo "<hr>";
echo "<h2>two-dimensional array</h2>";
$students = [
    ["CA1230760", "John Doe", 22],
    ["CA1230761", "Jane Smith", 21],
    ["CA1230762", "Michael Johnson", 23]

];
echo $students[1][2] ."<br>";
echo $students[0][1] . "<br>";
echo $students[2][2] . "<br>";

echo "<hr>";
echo "<h4>two-dimensional array + foreach loop</h4>";
foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . " ";
    }
    echo "<br>";
}
echo "<hr>";
echo " <h3>Two-Dimensional Associative Array</3>";
echo "<br>";
$students =[
    [
        "id" => "CA1230760",
        "name" => "John Doe",
        "age" => 22
    ],
    [
        "id" => "CA1230761",
        "name" => "Jane Smith",
        "age" => 21
    ],
    [
        "id" => "CA1230762",
        "name" => "Michael Johnson",
        "age" => 23
    ]
];
echo $students[0]["name"] . "<br>";
echo $students[0]["age"] . "<br>";
echo $students[0]["id"] . "<br>";
echo "<hr>";

echo "<h4>Two-Dimensional Associative Array + foreach loop</h4>";
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<br>";
}
echo "<hr>";
echo "<h2>Array Functions</h2>";
function 
?>