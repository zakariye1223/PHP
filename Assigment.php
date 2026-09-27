<?php

echo "<h2 style='text-align:center;'>Multiplication Table</h2>";

echo "<table border='1' cellspacing='0' cellpadding='7'
      style='margin:auto; border-collapse:collapse; text-align:center;'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>";
        echo $i * $j;
        echo "</td>";

    }

    echo "</tr>";
}

echo "</table>";

?>