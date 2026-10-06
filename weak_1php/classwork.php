<?php

$people = [
    ["CA1234567D", "Ahmed", "0612345678", "Mogadishu"],
    ["CA1234568D", "Mohamed", "0623456789", "Hargeisa"],
    ["CA1234569D", "Hassan", "0634567890", "Kismayo"]
];

echo "<h2 style='text-align:center;'>Question 8: Personal Information</h2>";

echo "<table border='1' cellspacing='0' cellpadding='8'
style='margin:auto; border-collapse:collapse; text-align:center;'>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";



foreach ($people as $person) {

    echo "<tr>";

    echo "<td>" . $person[0] . "</td>";
    echo "<td>" . $person[1] . "</td>";
    echo "<td>" . $person[2] . "</td>";
    echo "<td>" . $person[3] . "</td>";

    echo "</tr>";
   
}

echo "</table>";

?>