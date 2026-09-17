<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    </div>

  <div id="content">
    <h1>Обратная связь</h1>
    <?php
    /*
    * Задаем два вопроса, необходимые для решения задачи:
    * 1. В какой единице измерения получено значение из php.ini (последний символ: K, M, G)?
    * 2. На сколько степеней 1024 нужно умножить числовое значение для перевода в байты?
    */

    // Создаем переменную $size со значением директивы post_max_size
    $size = ini_get('post_max_size');

    // Получаем букву единицы измерения (последний символ строки в верхнем регистре)
    $unit = strtoupper(substr($size, -1));

    // Извлекаем числовое значение
    $val = (int) $size;

    // Вычисляем результат в байтах с помощью конструкции switch
    switch ($unit) {
        case 'G':
            $val *= 1024;
        case 'M':
            $val *= 1024;
        case 'K':
            $val *= 1024;
            break;
    }

    $size = $val;
    ?>

    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>

    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</p>
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