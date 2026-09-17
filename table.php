<?php
// Упражнение 1: Создание переменных $cols и $rows (от 1 до 10)
$cols = 20;
$rows = 20;

// Упражнение 3: Создание функции drawTableс аргументами $cols, $rows, $color и типами данных
function drawTable(int $cols = 10, int $rows = 10, string $color = 'green'): void {
    echo '<table border="1" width="200" style="border-collapse: collapse;">';
    
    // Упражнение 1: Циклы for для отрисовки таблицы умножения
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo '<tr>';
        for ($td = 1; $td <= $cols; $td++) {
            
            // Упражнение 2: Оформление первой строки ($tr == 1) и первого столбца ($td == 1)
            // Использование <th>, полужирного текста, центрирования и фонового цвета $color
            if ($tr == 1 || $td == 1) {
                echo "<th style='background-color: {$color}; text-align: center; font-weight: bold;'>" . ($tr * $td) . "</th>";
            } else {
                echo "<td style='text-align: center;'>" . ($tr * $td) . "</td>";
            }
            
        }
        echo '</tr>';
    }
    
    echo '</table>';
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
  </div>

  <div id="content">
    <h1>Таблица умножения</h1>

    <form action=''>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>

    <!-- Упражнение 3: Отрисовка таблицы с помощью функции drawTable() -->
    <?php drawTable($cols, $rows, 'yellow'); ?>

  </div>

  <div id="nav">
    <h2>Навигация по сайту</h2>
    <ul>
      <li><a href='index.php'>Домой</a></li>
      <li><a href='about.php'>О нас</a></li>
      <li><a href='contact.php'>Контакты</a></li>
      <li><a href='table.php'>Таблица умножения</a></li>
      <li><a href='calc.php'>Калькулятор</a></li>
    </ul>
  </div>

  <div id="footer">
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?= date('Y') ?>
  </div>

</body>

</html>