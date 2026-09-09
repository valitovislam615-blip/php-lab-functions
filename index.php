<?php
  // Инициализация массива меню
  $leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
  ];

  // Упражнение 4: Функция drawMenu с параметрами $menu (array) и $vertical (bool)
  function drawMenu(array $menu, bool $vertical = true): void {
      $style = $vertical ? '' : 'style="display: flex; list-style: none; gap: 15px; padding: 0;"';
      
      echo "<ul {$style}>";
      foreach ($menu as $item) {
          echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
      }
      echo "</ul>";
  }

  // Установка локали и выбор значений даты
  setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  
  $mon = strftime('%B');
  if (!mb_check_encoding($mon, 'UTF-8')) {
      $mon = mb_convert_encoding($mon, 'UTF-8', 'Windows-1251');
  }
  
  $year = strftime('%Y');

  // Приветствие по времени суток
  $hour = (int) strftime('%H');
  $welcome = '';

  if ($hour >= 0 && $hour < 6) {
      $welcome = 'Доброй ночи';
  } elseif ($hour >= 6 && $hour < 12) {
      $welcome = 'Доброе утро';
  } elseif ($hour >= 12 && $hour < 18) {
      $welcome = 'Добрый день';
  } elseif ($hour >= 18 && $hour <= 23) {
      $welcome = 'Добрый вечер';
  } else {
      $welcome = 'Доброй ночи';
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
  </div>

  <div id="content">
    <h1><?= $welcome ?>, Гость!</h1>

    <blockquote>
      <?php echo 'Сегодня ', $day, ' число, ', $mon, ' месяц, ', $year, ' год.'; ?>
    </blockquote>

    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь...
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен"...
    </p>
  </div>

  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Упражнение 4: Отрисовка меню с помощью функции drawMenu -->
    <?php drawMenu($leftMenu, true); ?>
  </div>

  <div id="footer">
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?php echo $year; ?>
  </div>

</body>

</html>