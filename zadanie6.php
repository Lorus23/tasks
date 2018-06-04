<?php
$cols = 10;  // ячейка
$rows = 10;  // строка
?>

<html>
<head>
    <title>Таблица умножения</title>
</head>
<body>
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Таблица -->
    <?php
    echo "<table border = '1' width='400'>";
    for ($tr = 1; $tr <= $rows; $tr++) { // минимальная таблица умножения - это 1 х 1
        echo "<tr>"; // рисует строку (внутри <tr> находится <td> - нужен очередной цикл)
        for ($td = 1; $td <= $cols; $td++) {
           if ($tr>1 and $td>1 and $tr % 2 == 0 and $td % 2 == 0) {echo "<td>" .'('. $tr * $td .')'. "</td>"; }
           elseif ($tr>1 and $td>1 and $tr % 2 != 0 and $td % 2 != 0) {echo "<td>" .'['. $tr * $td .']'. "</td>"; }
           else
               {echo "<td>" . $tr * $td . "</td>";} // $tr * $td - для вывода значений (цифр) внутри таблицы

        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>