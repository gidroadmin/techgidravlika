<?php include ("blocks/bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
if (!isset($id)) {$id = 1;}
//Ip adress
$ip = $_SERVER['REMOTE_ADDR'];

/* Проверяем, является ли переменная числом */
if (!preg_match("|^[\d]+$|", $id)) {
exit ("<p>Неверный формат запроса! Проверьте URL!");
}

$result = mysql_query ("SELECT * FROM data WHERE id='$id'",$db);

if (!$result)
{
echo "<p>Запрос на извлечение данных из базы не прошел. Напишите об этом администрации сайта admin@pitanieplus.ru <br><strong>Код ошибки:</strong></p>";
exit (mysql_error());
}

if (mysql_num_rows($result) > 0)
{
$myrow = mysql_fetch_array($result);

$new_view = $myrow["view"] + 1;
$update = mysql_query ("UPDATE data SET view='$new_view' WHERE id='$id'",$db);

}
else
{
echo "<p>Информация по запросу не может быть извлечена в таблице нет данных.</p>";
exit();
}

/*Скрипт показующий путь (историю движения пользователя)*/
$put_menu =  $myrow["cat"];

$menu = mysql_query ("SELECT title FROM categories WHERE id='$put_menu'",$db);

if (!$menu)
{
echo "<p>Запрос на извлечение данных из базы не прошел. Напишите об этом администрации сайта admin@pitanieplus.ru. <br><strong>Код ошибки:</strong></p>";
exit (mysql_error());
}

if (mysql_num_rows($menu) > 0)
{
$myrow11 = mysql_fetch_array($menu);
}
else
{
echo "<p>Информация по запросу не может быть извлечена в таблице нет данных.</p>";
exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <meta name="description" content="Контакты для связи">
    <meta name="keywords" content="Контактная форма">
    <title>Контакты | Написать автору сайта</title>
</head>
<body>
    <div class="container">
		<header class="header">
		<h1 class="main-title">Контакты</h1>
		<nav class="main-navigation">
			<div class="wrap-nav-left">
				<img src="images/favicon.png" title="<?php echo $myrow["title"]; ?>" alt="<?php echo $myrow["title"]; ?>" class="menuToggle">
						<p class="menuToggle-p">
							Pitanie <span >+ </span>
						</p>
			</div>
			<ul class="site-navigation">
				<li class="li-home"><a href="https://www.pitanieplus.ru">Главная</a></li>
				<li class="li-contacts"><a href="mail.php">Контакты</a></li>
				<li class="li-map"><a href="sitemap.php">Карта сайта</a></li>
				<li class="li-rss"><a href="https://feeds.feedburner.com/pitanieplus">Подписаться на RSS</a></li>
				<li class="li-email"><a href="https://feedburner.google.com/fb/a/mailverify?uri=pitanieplus&amp;loc=ru_RU">Рассылка по Email</a></li>
			</ul>
			<div class="main-header-logo">
				<a href="https://www.pitanieplus.ru">
					<img src="images/logo.jpg" class="img" alt="<?php echo $myrow["title"]; ?>">
				</a>
			</div>
			<div class="logo"><img src="images/img_header.jpg" alt="<?php echo $myrow["title"]; ?>"></div>
				<p class="quote">
					Когда узнал из чего делаются продукты питания - перестал жрать и начал питаться!
				</p>
				<div class="search-wrap" >
					<form action="https://pitanieplus.ru/search.php" id="cse-search-box">
						<input type="hidden" name="cx" value="partner-pub-0235631323606958:rphp8ihrvl2" />
						<input type="hidden" name="cof" value="FORID:11" />
						<input type="hidden" name="ie" value="windows-1251" />
						<input name="q" placeholder="Google поиск..." type="search" autocomplete="off" class="search-input">
						<button type="submit" name="sa" value="&#x041f;&#x043e;&#x0438;&#x0441;&#x043a;" class="search-button">&#128269;</button>
					</form>
				</div> 
				<div class="wrap-nav-right">
					<div class="img-search">&#128269;</div>
					<div class="menu-icon"></div>
				</div>
		</nav>
	<div class="line">&nbsp;</div>
</header>
		
		
        <?php include ("blocks/lefttd.php"); ?>
        <main class="main">
            <article class="main-article">
                <h2 class="art-h1">Написать автору</h2>
                <form action="contact.php" method="post" class="contact-form">
                    <div class="elem-group">
                        <label>Ваше имя:</label>
                        <input type="text" name="visitor_name" placeholder="Иван Петров" pattern=[A-Z\sa-z\А-Я\а-я]{3,20} required>
                    </div>
                    <div class="elem-group">
                        <label for="email">Ваш E-mail:</label>
                        <input type="email"  name="visitor_email" placeholder="ваш@email.com" required>
                    </div>
                    <div class="elem-group">
                        <label for="title">Тема сообщения:</label>
                        <input type="text"  name="email_title" required placeholder="Тема..." pattern=[A-Za-z0-9\А-Яа-я0-9]{8,60}>
                    </div>
                    <div class="elem-group">
                        <label for="message">Напишите здесь Ваше сообщение:</label>
                        <textarea  name="visitor_message" placeholder="Текст соощения..." required></textarea>
                    </div>
                    <button type="submit" class="elem-button">Send Message</button>
                </form>

            </article>

        </main>
        <?php include ("blocks/righttd.php"); ?>
        <?php include ("blocks/footer.php"); ?>
    </div>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/script.js"></script>
</body>
</html>