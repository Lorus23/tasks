<h1>Таблица умножения</h1>
<?php
echo '<table border="1">';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++)
        if ($i > 1 and $j > 1 and $i % 2 == 0 and $j % 2 == 0) {
            echo "<td>" . '(' . $i * $j . ')' . "</td>";
        } elseif ($i > 1 and $j > 1 and $i % 2 != 0 and $j % 2 != 0) {
            echo "<td>" . '[' . $i * $j . ']' . "</td>";
        } else {
            echo "<td>" . $i * $j . "</td>";
        }
}
echo '</tr>';
echo '</table>';
?>