<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = $_POST["inputNumber"];
    $number = $_POST['number'];
    echo "<h2> Multiplication Table Up To $number</h2>";
    echo "<table border='1'>";
        echo "<tr><td></td>";
    for ($i = 1;$i <=$number; $i++){
        echo "<td>$i</td>";
    }
    echo"</tr>";
    for($row = 1;$row <= $number;$row++){
        echo"<tr><td><b>$row</b></td>";
        for($col = 1;$col <= $number; $col++){
            echo "<td" . $row *$col . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>