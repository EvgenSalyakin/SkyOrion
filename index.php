<?php
require __DIR__ .'/vendor/autoload.php';
use Carbon\Carbon;

if(!isset($_GET['page'])){
    $page = 'main';
}
else{
    $page = addslashes(strip_tags(trim($_GET['page'])));
}
switch ($page){
    case 'main':
        $title = 'Главная';
        $meta_d = 'Описание страницы Главная';
        $meta_kw = 'Ключевые слова страницы Главная';
        break;
    case 'fibo':
        $title = 'Фибоначи';
        $meta_d = 'Описание страницы Ряд Фибоначи';
        $meta_kw = 'Ключевые слова страницы ряд Фибоначи';
        break;
    case 'luk':
        $title = 'Люка';
        $meta_d = 'Описание страницы Ряд Люка';
        $meta_kw = 'Ключевые слова страницы ряд Люка';
        break;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_d; ?>" />
    <meta name="keywords" content="<?php echo $meta_kw; ?>" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<header>
    <img src="/img/icon-adv-php.png" alt="Логотип" id="Insert_logo" >
    Homework - GeekHub - Advanced PHP 2015
</header>
<div id="page">
    <aside>
        <nav>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/index.php?page=fibo">Ряд Фибоначчи</a></li>
                <li><a href="/index.php?page=luk">Ряд Люка</a></li>
            </ul>
        </nav>
    </aside>
    <article class="content">
        <?php
        if ($page <> 'main') {
            include('function/' . $page . '.php');
            echo nl2br("\n");
            echo nl2br("\n");
            echo "Расчеты произведены:\n" . Carbon::now('Europe/Kiev');
        }
        ?>
    </article>
</div>
<footer>
    <address>
        <a href="http://geekhub.ck.ua">http://geekhub.ck.ua</a>
    </address>
</footer>
</body>
</html>
