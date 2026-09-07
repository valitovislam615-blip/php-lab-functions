<?php
  // Инициализация массива (Упражнение 3)
  $leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
  ];

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
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
    </p>
  </div>

  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <?php foreach ($leftMenu as $item): ?>
        <li><a href='<?= $item['href'] ?>'><?= $item['link'] ?></a></li>
      <?php endforeach; ?>
    </ul>
    <!-- Меню -->
    <!-- Навигация -->
  </div>

  <div id="footer">
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?php echo $year; ?>
  </div>

</body>

</html>