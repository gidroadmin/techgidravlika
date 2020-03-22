<!DOCTYPE html>
<html lang="ru">
<head>
<title>Techgidravlika</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
    
</head>
<body>
	<div class="container">
		<header id="header">
            <span class="header__logo">
                <img src="img/pipeline-access_tech_logo2.png" alt="Гидравлика">
                <p>menu</p>
            </span>
            <p class="header__title">
                Гидравлический расчет трубопроводов представляет собой расчет коэффициента.
            </p>
            <div class="header__section">
                <div class="header__search">
                    <form action="" method="get" class="search-wrap">
                        <input name="s" placeholder="Google поиск..." type="search" autocomplete="off">
                        <button type="submit">&#128269;</button>
                    </form>
                    <div class="social__menu">
                            <?php
                                //Tweeter
                                $title = $myrow["title"]; // текст твита
                                $url ="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; // ссылка на страницу
                                $hashtags = $myrow["meta_k"];

                                //Facebook
                                //$title = 'Привет, мир'; // заголовок
                                $summary = 'Короткое описание данной статьи, например можно использовать функцию WordPress the_excerpt()'; // анонс поста
                                //$url = 'https://misha.blog?p=1'; // ссылка на пост
                                $image_url = 'http://www.techgidravlika.ru/favicon.ico' // URL изображения

                                $title = $myrow["title"];
                                $description = $myrow["meta_d"];
                                //$url = 'https://misha.blog?p=1';
                                //$image_url = 'https://misha.blog/wp-content/themes/truemisha/a/apple-touch-icon-144x144-precomposed.png'
                            ?>
                        
                        <ul id="box">
                            <li >
                                <a href="http://vkontakte.ru/share.php?url=<?php echo urlencode($url); ?>&title=<?php echo $title; ?>&description=<?php echo $description; ?>&image=<?php echo $image_url; ?>&noparse=true" 
                                    onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false"
                                    title="Сохранить в Вконтакте" target="_parent" class="social-button">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800" >
                                        <path d="M393 566c-135 0-208-143-276-285-10-21 6-23 16-23l81-1c12 0 17 9 20 15 13 31 
                                                66 142 92 129 18-9 15-107 4-122-7-9-20-12-26-13-5-1 3-11 13-16 18-9 87-9 
                                                111-3 28 7 19 32 19 95 0 20-4 50 11 58 24 12 81-101 91-131 3-8 9-11 
                                                19-11h85c20 0 27 1 30 8 5 12-9 40-44 87-57 77-65 70-17 114 46 42 55 
                                                63 57 66 14 28-11 34-21 34h-76c-9 0-21 0-38-11-29-19-55-70-76-64-17 
                                                5-20 34-21 53-1 16-10 21-20 21h-34z" fill = "#244F93">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="http://twitter.com/share?text=<?php echo $title; ?>&via=twitterfeed&related=truemisha&hashtags=<?php echo $hashtags ?>&url=<?php echo $url; ?>" title="Поделиться ссылкой в Твиттере" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" target="_parent" class="social-button">
                                    <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M679 239s-21 34-55 57c7 156-107 329-314 329-103 0-169-50-169-50s81 17 163-45c-83-5-103-77-103-77s23 6 
                                                50-2c-93-23-89-110-89-110s23 14 50 14c-84-65-34-148-34-148s76 107 228 
                                                116c-22-121 117-177 188-101 37-6 71-27 71-27s-12 41-49 61c30-2 63-17 63-17z" fill = "#244F93">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo urlencode( $url ); ?>&p[title]=<?php echo $title ?>&p[summary]=<?php echo $summary ?>&p[images][0]=<?php echo $image_url ?>" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" title="Поделиться ссылкой на Фейсбук" target="_parent" class="social-button">
                                    <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg" width = "30" heigh ="30">
                                        <path d="M445 643h-90V419h-75v-87h75v-64q0-55 32-86 30-29 80-29 28 0 67 3v78h-47q-42 0-42 38v60h86l-11 87h-75v224z" fill = "#244F93">
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <a href="#" id="list" class="social-button vanish" onclick="social()"><span class="fa fa-share-alt fa-1_5x"></span></a>
                    </div>
                    
                </div>
                <div class="header__burger">
                    <span></span>
                    
                </div>
                
            </div>
        </header>
        <nav class="menu">
            <ul class="menu__list">
                <li><a href="index.html" id="preface"><span class="fas fa-home"></span>Главная</a></li>
                <li><a href="mail.html" id="preface"> <span class="fas fa-envelope"></span>Контакты</a></li>
                <li><a href="prog.html" id="preface"><span class="fas fa-sitemap"></span>Карта сайта</a></li>
                <li><a href="view_book_menu.html"><span class="fas fa-rss"></span>Подписаться на RSS</a></li>
                <li><a href="view_book.html"><span class="fas fa-rss-square"></span>Рассылка по Email</a></li>
                <li><a href="view_post.html"><span class="fas fa-address-book"></span>Гостевая книга</a></li>
            </ul>
        </nav>

	
		<nav class="left-nav">
            <div class="burger-menu__overlay" onclick="hideBody()"></div>


            <div class="category-wrap top">
                <p>Лекции и статьи</p>
                <ul>
                    <li><a href="" class="burger-menu__link">Интерактивные программы</a></li>
                    <li><a href="" class="burger-menu__link">Лекции по гидравлике</a></li>
                    <li><a href="">Статьи по гидравлике</a></li>
                    <li><a href="">Измерительные приборы</a></li>
                    <li><a href="">Трубопроводная арматура</a></li>
                    <li><a href="">Проектирование</a></li>
                    <li><a href="">Биография гидравликов</a></li>
                    <li><a href="">Разное</a></li>
                    <li><a href="">Насосы. Все о насосах</a></li>
                    <li><a href="">CAD/CAE/CAM программы</a></li>
                    <li><a href="">Изучение английского языка</a></li>
                </ul>
            </div>

            <div class="category-wrap">
                <p>Скачать книги</p>
                <ul>
                    <li><a href="">Гидравлика</a></li>
                    <li><a href="">Газодинамика</a></li>
                    <li><a href="">Физика</a></li>
                    <li><a href="">Математика</a></li>
                    <li><a href="">Химия</a></li>
                    <li><a href="">Справочники</a></li>
                    <li><a href="">Насосы</a></li>
                    <li><a href="">Метод конечных элементов</a></li>
                    <li><a href="">Проектирование, ТРИЗ</a></li>
                    <li><a href="">Теплотехника</a></li>
                    <li><a href="">Разное</a></li>
                    <li><a href="">Криогенные системы</a></li>
                </ul>
            </div>

            <div class="category-wrap">
                <p>Видеоуроки</p>
                <ul>
                    <li><a href="">Гидравлика</a></li>
                </ul>
            </div>

            <div class="category-wrap bottom">
                <p>Карта сайта</p>
                <ul>
                    <li><a href="">Карта сайта</a></li>
                    <li><a href="">Гостевая книга</a></li>
                </ul>
            </div>
        </nav>

        <aside class="left-info">
            
            <p class="left-info__zadachnik">Задачи по гидравлике с решениями.
                <br>Сборник задач.
                <br>Задачник по гидравлике.
            </p>
            <a href="#" class="left-info__download">Скачать бесплатно</a>
            <img src="img/107_zadach.gif" alt="Сборник задач">
            <img src="img/zadach_1.jpg" alt="Задачи по гидравлике"> 

            <p class="left-info__zadachnik">Видеоуроки по гидравлике.
                <br>Просто!
                <br>Понятно!
                <br>Доступно!
            </p>
            <a href="#" class="left-info__download">Скачать бесплатно</a>
            <img src="img/videouroki.gif" alt="Задачи по гидравлике">
            <p class="left-info__zadachnik">Один из лучших справочников по гидравлике.
                <br>Только простые и понятные формулы!
            </p>
            <a href="#" class="left-info__download">Скачать бесплатно</a>
            <img src="img/vilner_2.png" alt="Задачи по гидравлике">
            <img src="img/rss.png" alt="Подписаться на RSS">
            <a href="#" class="left-info__download">Подписаться на RSS</a>
            <p class="left-info__zadachnik">Подпишитесь на RSS и Вы будете получать информацию об обновлениях сайта на Ваш RSS канал!</p>
            <div class="email">
                <img src="img/rss_email.png" width="60">
                <p>Подписаться на <br>Е-mail рассылку</p>
            </div>
                <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open(&#39;http://feedburner.google.com/fb/a/mailverify?uri=techgidravlika&#39;, &#39;popupwindow&#39;, &#39;scrollbars=yes,width=550,height=520&#39;);return true"><p>Введите Ваш Email адрес:</p><p><input type="text" style="width:140px" name="email"></p><input type="hidden" value="techgidravlika" name="uri"><input type="hidden" name="loc" value="ru_RU"><input type="submit" value="Подписаться"></form>
            <p><a href="http://feeds.feedburner.com/techgidravlika" rel="nofollow"><img src="./Перевод единиц измерений. Конвертор единиц давлений_files/techgidravlika" height="26" width="88" style="border:0" alt=""></a></p>
              
        </aside>

		<main class="main">
            <article class="article">
                <h1 class="article__title">Гостевая книга</h1>
                    <section>
                    <? // WR-guest v 1.7M //  07.01.07 г.  //  Miha-ingener@yandex.ru

error_reporting (E_ALL);

$mainpage="http://МОЙ_САЙТ_RU-исправте_в_index.php_на_5-ой_строчке";

include "config.php";

$shapka="<html><head><META content='text/html; charset=utf-8' http-equiv=Content-Type>
<link rel=stylesheet type='text/css' href='images/$skin/style.css'></head><body>";

// БЛОК загадок
$rand_zag=array(
"Сидит дед, во сто шуб одет. Кто его раздевает, тот слёзы проливает.",
"Стоит Антошка на одной ножке. Кто его встретит - всяк ему поклонится.",
"Кто поляны белит белым? И на стенах пишет мелом?",
"Шьет пуховые перины, разукрасил все витрины?",
"Покатился по полу колобок, да оставил хвост на семь верст",
"Все обходят это место: здесь земля, как буд-то тесто.",
"Здесь осока, кочки, мхи, нет опоры для ноги.",
"умный Ивашка в деревянной рубашке. По белому полю пойдёт, всяк его след поймет",
"Кто приходит, кто уходит, все ее за ручку водят",
"Летит - кричит, сядет - молчит, кто его убьет - свою кровь прольет");

// БЛОК ответов на загадки
$rand_qwe=array(
"лук",
"гриб",
"мороз",
"мороз",
"клубок",
"болото",
"болото",
"карандаш",
"дверь",
"комар");


// Для цифрозащиты 4-ый антиспам:
$maxkey=4; // Колличество символов в коде  (можно изменять)
$absrand="233443";// Случайное число. Используется для цифрозащиты. Генерировать его нужно случайно при настройке или изменении конфигурации скрипта.

if (isset($_GET['image'])) {
// Функция с цифрами защиты
$st="R0lGODlhCgAMAIABAFNTU////yH5BAEAAAEALAAAAAAKAAwAAAI"; // общая часть для всех рисунков
function imgwr($st,$num){
 if ($num=="0") {$len="63"; $number=$st."WjIFgi6e+QpMP0jin1bfv2nFaBlJaAQA7";}
 if ($num=="1") {$len="61"; $number=$st."UjA1wG8noXlJsUnlrXhE/+DXb0RUAOw==";}
 if ($num=="2") {$len="64"; $number=$st."XjIFgi6e+QpMPRlbjvFtnfFnchyVJUAAAOw==";}
 if ($num=="3") {$len="64"; $number=$st."XjIFgi6e+Qovs0RkTzXbj+3yTJnUlVgAAOw==";}
 if ($num=="4") {$len="64"; $number=$st."XjA9wG8mWFIty0amczbVJDVHg9oSlZxQAOw==";}
 if ($num=="5") {$len="63"; $number=$st."WTIAJdsuPHovSKGoprhs67mzaJypMAQA7";}
 if ($num=="6") {$len="63"; $number=$st."WjIFoB6vxmFw0pfpihI3jOW1at3FRAQA7";}
 if ($num=="7") {$len="61"; $number=$st."UDI4Xy6vtAIzTyPpg1ndu9oEdNxUAOw==";}
 if ($num=="8") {$len="63"; $number=$st."WjIFgi6e+QpMP2slSpJbn7mFeWDlYAQA7";}
 if ($num=="9") {$len="64"; $number=$st."XjIFgi6e+QpMP0jinvbT2FGGPxmlkohUAOw==";}
 header("Content-type: image/gif"); 
 header("Content-length: $len");
 echo base64_decode($number); }
// Вывод изображений на экран (все кодированы - робот не пройдёт)
if (array_key_exists("image", $_REQUEST)) { $num=$_REQUEST["image"];
for ($i=0; $i<10; $i++) {if (md5($i+$absrand)==$num) {imgwr($st,$i); die();}} }
exit;}




$rnd_do=array("п<B>лю</B>с","<B>ми</B>нус","ум<B>но</B>жить");

// Событие добавления сообщения if $event=add
if (isset($_GET['event'])) { if ($_GET['event']=="add") {

// возвращаем значения данных из формы и присваиваем их переменным
if (isset ($_POST['name']) & isset ($_POST['msg']) & isset ($_POST['email'])) {$name=$_POST['name']; $msg=$_POST['msg']; $email=$_POST['email'];} else {exit;}

sleep(1); // мелкая защита от БОТОВ. Человеку секунда не время - а прога по подбору ключа - будет работать долго и не загружать сервер

if ($antispam=="1") {
$bada="$shapka $back <font color=red>Код на картинке НЕ совпадает</font> с введённым вами!";
if (isset($_POST['num'])) {$num=$_POST['num'];} else {print"$bada"; exit;}
if (isset($_POST['rand'])) {$rand=$_POST['rand'];} else {print"$bada"; exit;}
if ($num!=$rand) {print"$bada"; exit;}}

if ($antispam=="2") {
$bada="$shapka $back <font color=red>Введённый вами код НЕ совпадает</font> с расчётным!";
if (isset($_POST['usernum'])) {$usernum=$_POST['usernum'];} else {print"$bada"; exit;}
if (isset($_POST['chek'])) {$chek=$_POST['chek'];} else {print"$bada"; exit;}
$dt=explode("|",$chek);
if ($dt[1]==0) {$number=$dt[0]+$dt[2];}
if ($dt[1]==1) {$number=$dt[0]-$dt[2];}
if ($dt[1]==2) {$number=$dt[0]*$dt[2];}
if ($usernum!=$number) {print"$bada"; exit;}}

if ($antispam=="3") {
$qwe=$_POST['qwe'];
$answer=$_POST['answer'];
if (strtolower($rand_qwe[$qwe])!=strtolower($answer)) {print"$shapka $back <font color=red>ОТВЕТ НЕ верен!</font> Попробуйте снова."; exit;}}

if ($antispam=="4") {
$bada="$shapka $back <font color=red>Введённый вами код НЕ верен</font>!";
if (isset($_POST['usernum'])) {$usernum=$_POST['usernum'];} else {print"$bada"; exit;}
if (isset($_POST['xkey'])) {$xkey=$_POST['xkey'];} else {print"$bada"; exit;}
$userkey=md5("$usernum+$absrand");
if ($userkey!=$xkey) {print"$bada"; exit;}}

if ($name == "" || strlen($name) > $maxname) {print "$shapka $back ваше имя или пустое, или превышает $maxname символов!</B></center>"; exit;}
if ($msg == "" || strlen($msg) > $maxmsg) {print "$shapka $back ваше сообщение или пустое или превышает $maxmsg символов.</B></center>"; exit;}
if (!eregi("^([0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-wyz][a-z](fo|g|l|m|mes|o|op|pa|ro|seum|t|u|v|z)?)$", $email) and $email != "") {print "$shapka $back и введите корректный E-mail адрес!</B></center>"; exit;}


$msg=str_replace("|","I",$msg);
$name=wordwrap($name,24,' ',1); // разрываем слишком длинные строки
$msg=wordwrap($msg,75,' ',1);
$today=mktime();

// производим запись данных в файл по шаблону: собщение|имя|емайл|дата|время|МКТАЙМ|
$text="$msg|$name|$email|$date|$time|$today|";

$text=str_replace("&#032;",' ',$text);
$text=str_replace("&",'&amp;',$text);
$text=str_replace(">",'&gt;',$text);
$text=str_replace("<",'&lt;',$text);
$text=str_replace("\"",'&quot;',$text);
$text=preg_replace("/\n\n/",'<p>',$text);
$text=preg_replace("/\n/",'<br>',$text);
$text=preg_replace("/\\\$/",'&#036;',$text);
$text=preg_replace("/\r/",'',$text);
$text=stripslashes($text);
$text=preg_replace("/\\\/",'&#092;',$text);
$text=str_replace("\r\n","<br> ",$text);
$text=str_replace("\n\n",'<p>',$text);
$text=str_replace("\n",'<br> ',$text);
// Вырезаем 3 и более ентеров
do {$text=str_replace("<br><br><br>","<br>",$text);} while (preg_match("/<br><br><br><br>/i",$text));
// Вырезаем 3 и более пробелов подряд
do {$text=str_replace("   "," ",$text);} while (preg_match("/   /i",$text));
$text=str_replace("\t",' ',$text);
$text=str_replace("\r",' ',$text);
$text=str_replace('   ',' ',$text);

if ($antiflud=="1") {  // функция АНТИФЛУД здесь!
$linesn = file("guest.dat"); $in=count($linesn);
if ($in > 0) {
$lines=file("guest.dat"); $i=count($lines)-1; $itogo=$i; $dtf=explode("|",$lines[$i]);
$txtback="$dtf[0]|$dtf[1]|$dtf[2]|$dtf[3]|"; $lastmsg=$dtf[5];
$dtb=explode("|",$text);
$txtflud="$dtb[0]|$dtb[1]|$dtb[2]|$dtb[3]|";
$today=mktime();
if (($lastmsg+30)>$today) {
$eshe=($lastmsg+30)-$today; print"$back Чаще 30 секунд запрещено размещать сообщения. Подождите ещё $eshe секунд!"; exit;}
if ($txtflud==$txtback) {print"$back Данное сообщение уже размещено. Флудить в гостевой запрещено!"; exit;} }
}


$fp=fopen("guest.dat","a+");
flock ($fp,LOCK_EX);
fputs($fp,"$text\r\n");
flock ($fp,LOCK_UN);
fclose($fp);
@chmod("guest.dat", 0644);


if ($sendmail=="1") { // отправка сообщения админу на мыло
$headers=null;
$headers.="Content-Type: text/plain; charset=windows-1251\r\n";
$headers.="From: ".$name." <".$email.">\r\n";
$headers.="X-Mailer: PHP/".phpversion()."\r\n";
// Собираем всю информацию в теле письма
$host=$_SERVER["HTTP_HOST"]; $self=$_SERVER["PHP_SELF"];
$allmsg = $gname.chr(13).chr(10).'Новое сообщение в гостевой: http://'.$host.$self.chr(13).chr(10).'Имя: '.$name.chr(13).chr(10).'E-mail: '.$email.chr(13).chr(10).'Сообщение: '.$msg.chr(13).chr(10);
mail("$adminemail", "$gname (сообщение)", $allmsg, $headers); // Отправляем письмо майлеру на съедение ;-)
}


print "$shapka <script language='Javascript'>function reload() {location = 'index.php'}; setTimeout('reload()', 1500);</script>
<div>


Спасибо, <B>$name</B>, Ваше сообщение успешно добавлено. <BR><BR>Через несколько секунд Вы будете автоматически перемещены на первую страницу гостевой.<BR><BR>
<B><a href='index.php'>Нажмите здесь, если не хотите больше ждать</a></body></html>";
exit;
}
}



// Типо главной страницы
if (!isset($_GET['page'])) {$page=1;} else {$page=$_GET['page'];}

print "<html><head>
<title>$gname</title>
<META HTTP-EQUIV='Pragma' CONTENT='no-cache'>
<META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'>
<META content='text/html; charset=windows-1251' http-equiv=Content-Type>
<META content='$gname, $maintext' name=Keywords>
<META content='Гостевая книга. Здесь Вы можете оставить отзыв о нашем сайте.' name=Description>
<link rel=stylesheet type='text/css' href='images/$skin/style.css'>
<SCRIPT language=JavaScript>
function x () {return;}
function FocusText() {
    document.REPLIER.msg.focus();
    document.REPLIER.msg.select();
    return true; }
function DoSmilie(addSmilie) {
    var revisedmsgage;
    var currentmsgage = document.REPLIER.msg.value;
    revisedmsgage = currentmsgage+addSmilie;
    document.REPLIER.msg.value=revisedmsgage;
    document.REPLIER.msg.focus();
    return;
}
function DoPrompt(action) { var revisedmsgage; var currentmsgage = document.REPLIER.qmsgage.value; }
</SCRIPT>
</head>
<body>

<center><a href=index.php><h3>$gname</h3></a>

<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TR><TD width='1%'><IMG src='images/$skin/1.gif' width=14 height=12 border=0></TD><TD width='96%' background='images/$skin/2.gif'></TD><TD width='3%'><IMG src='images/$skin/3.gif' width=14 height=12 border=0></TD></TR>
<TR><TD background='images/$skin/4.gif'></TD>
<TD>
<table width=100%><TR>
<TD><B>Сегодня <b>$date</b></TD>
<TD align=center><a href='index.php?event=new&page=$page'>Добавить сообщение</a></TD>
<TD align=center><a href='$mainpage'>Вернуться на главную</a></div></B>
</TD></TR>";

if (strlen($maintext)>5) {print"<TR><TD colspan=3><hr size=-1 width=100%><center>$maintext</center></TD></TR>";}

print "</TABLE></TD>
<TD background='images/$skin/6.gif'>&nbsp;</TD>
</TR><TR><TD><IMG src='images/$skin/8.gif' width=14 height=12 border=0></TD><TD background='images/$skin/5.gif'></TD><TD><IMG src='images/$skin/9.gif' width=14 height=12 border=0></TD></TR>
</TBODY></TABLE>";



if (isset($_GET['event'])) { if ($_GET['event']=="new") {
print "
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TR><TD width='1%'><IMG src='images/$skin/1.gif' width=14 height=12 border=0></TD><TD width='96%' background='images/$skin/2.gif'></TD><TD width='3%'><IMG src='images/$skin/3.gif' width=14 height=12 border=0></TD></TR>
<TR><TD background='images/$skin/4.gif'></TD>
<TD><div align=center>Добавить сообщение</font><BR>
<center><table><tr><td valign=top>
<B>Имя</B> и E-mail<BR><BR>
<B>Сообщение</B>
<table width=90 height=70><tr><td valign=top>
<A href='javascript:%20x()' onclick=\"DoSmilie(' :-))');\">$s1</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-)');\">$s2</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-P');\">$s3</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' 8-)');\">$s4</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-(');\">$s5</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' :-O');\">$s6</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' ;-)');\">$s7</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' :roll:');\">$s8</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' :rf:');\">$s9</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' 8-(');\">$s10</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' `-(');\">$s11</a>
<A href='javascript:%20x()' onclick=\"DoSmilie('[RB]  [/RB] ');\"><font color=red><B>RB</b></font></a>
</tr></td></table>
</td><td>
<form action=index.php?event=add method=post name=REPLIER>
<input type=text value='' name=name size=26>&nbsp;
<input type=text value='' name=email size=26><br> 
<textarea cols=55 rows=5 size=500 name=msg></textarea>";

// Первый вариант антиспама
if ($antispam=="1") {print"<tr><td align='right'>Защитный код:</td><td>";
$rand_key=array("7531","8642","9753","10864","1975","2186","3197","4298");
$imag_key=array("8642","9753","10864","1975","2186","3197","4298","7531");
$rand = mt_rand(0,7); $rnd=$rand_key[$rand]; $ima=$imag_key[$rand];
print"<img src='images/$ima.png' width=300 height=20 border=0>";
print"</td></tr><input name=rand type=hidden value='$rnd'>
<tr><td align='right'><font color=red>Напишите код цифрами:</font></td><td><input name='num' type='text' maxlength=5 size=5></td></tr>";}

// Второй вариант антиспама
if ($antispam=="2") {$rnd1=mt_rand(1,9); $rnd2=mt_rand(0,2); $rnd3=mt_rand(1,9);
print"<TR><TD>Защитный код АНТИСПАМ:</TD><TD><B>$rnd1</B> $rnd_do[$rnd2] <B>$rnd3</B> = <input name='usernum' type='text' maxlength=3 size=5> (посчитайте и введите значение)
<input name=chek type=hidden value='$rnd1|$rnd2|$rnd3|'>";
}
// Третий вариант антиспама
if ($antispam=="3") {
$rand = mt_rand(0,9); $rnd=$rand_zag[$rand];
print"<TR><TD>Отгадай загадку</TD><TD><B>$rnd</B></TD></TR><TR><TD>введите ответ</TD><input name=qwe type=hidden value='$rand'>
<TD><input name='answer' type='text' maxlength=30 size=15> (в ответе не используйте пробелы)";}

// Четвёртый вариант антиспама
if ($antispam=="4") {

// Вывод изображений на экран (все кодированы - робот не пройдёт)
if (array_key_exists("image", $_REQUEST)) { $num=$_REQUEST["image"];
for ($i=0; $i<10; $i++) {if (md5($i+$absrand)==$num) {imgwr($st,$i); die();}} }

$xkey=""; mt_srand(time()+(double)microtime()*1000000);

print"<TR><TD>Защитный код:</TD><TD>";
for ($i=0; $i<$maxkey; $i++) {
$snum[$i]=mt_rand(0,9); $psnum=md5($snum[$i]+$absrand);
$phpself=$_SERVER["PHP_SELF"];
echo "<img src=$phpself?image=$psnum border='0' alt=''>\n";
$xkey=$xkey.$snum[$i];
}
$xkey=md5("$xkey+$absrand");

print" <input name='usernum' type='text' maxlength=$maxkey size=6> (введите число, указанное на картинке)
<input name=xkey type=hidden value='$xkey'>";
}


   print"<tr><td align='center' colspan=2><input type='submit' value=' Добавить '></td></tr>
</table>
</TD>

<TD background='images/$skin/6.gif'>&nbsp;</TD>
</TR><TR><TD><IMG src='images/$skin/8.gif' width=14 height=12 border=0></TD><TD background='images/$skin/5.gif'></TD><TD><IMG src='images/$skin/9.gif' width=14 height=12 border=0></TD></TR>
</TBODY></TABLE>";
} }


// считываем данные в память
$lines = file("guest.dat");
$maxi = count($lines)-1;

// выводим СПИСОК доступных номеров СТРАНИЦ ВВЕРХУ
if (isset($_GET['page'])) {$page=$_GET['page'];} else {$page="1";}
if ($page==0) {$page="1";} else {$page=abs($page);}

print "Страницы:&nbsp; ";
for($i=0; $i<$maxi+1;) {$ip=$i/$qq+1;
if ($page==$ip) {print "<B>$ip</B> &nbsp;";} else {print "<a href=\"index.php?page=$ip\">$ip</a> &nbsp;";}
$i=$i+$qq;}


// Выводим qq сообщений на текущей странице

$maxpage=ceil(($maxi+1)/$qq); if ($page>$maxpage) {$page=$maxpage;}

if ($msginout=="1") 
{ $fm=$qq*($page-1); if ($fm>$maxi) {$fm=$maxi-$qq;}
  $lm=$fm+$qq; if ($lm>$maxi) {$lm=$maxi+1;} }
else 
{ $fm=$maxi-$qq*($page-1); if ($fm<"0") {$fm=$qq;}
  $lm=$fm-$qq; if ($lm<"0") {$lm="-1";} }

do { $dt = explode("|", $lines[$fm]);
if ($msginout=="1") {$fm++; $num=$maxi-$fm+2;} else {$fm--; $num=$fm+2;}

// заменяем текстовые смайлики на графические
$dt[0]=str_replace(":-))",$s1,$dt[0]);
$dt[0]=str_replace(":-)",$s2,$dt[0]);
$dt[0]=str_replace(":-P",$s3,$dt[0]);
$dt[0]=str_replace("8-)",$s4,$dt[0]);
$dt[0]=str_replace(":-(",$s5,$dt[0]);
$dt[0]=str_replace(":-O",$s6,$dt[0]);
$dt[0]=str_replace(";-)",$s7,$dt[0]);
$dt[0]=str_replace(":roll:",$s8,$dt[0]);
$dt[0]=str_replace(":rf:",$s9,$dt[0]);
$dt[0]=str_replace("8-(",$s10,$dt[0]);
$dt[0]=str_replace("`-(",$s11,$dt[0]);
$dt[0]=str_replace("[RB]","<B><font color=red>", $dt[0]);
$dt[0]=str_replace("[/RB]","</font></B>", $dt[0]);
$dt[0]=str_replace("&amp;#124;","&#124;",$dt[0]);
if ($liteurl=="1") {$dt[0]=eregi_replace("((https?|ftp)://[[:alnum:]_=/-]+(\\.[[:alnum:]_=/-]+)*(/[[:alnum:]+&._=/~%]*(\\?[[:alnum:]?+&;_=/%]*)?)?)", "<a href='\\1' target='_blank'>\\1</a>", $dt[0]);}

print"
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TR><TD width='1%'><IMG src='images/$skin/1.gif' width=14 height=12 border=0></TD><TD width='96%' background='images/$skin/2.gif'></TD><TD width='3%'><IMG src='images/$skin/3.gif' width=14 height=12 border=0></TD></TR>
<TR><TD background='images/$skin/4.gif'></TD>
<TD><B><a href='mailto:$dt[2]'>$dt[1]</a> ($dt[3] $dt[4])</B>
<UL><em>$dt[0]</em>
<div align=right>$num</div></TD>
<TD background='images/$skin/6.gif'>&nbsp;</TD>
</TR><TR><TD><IMG src='images/$skin/8.gif' width=14 height=12 border=0></TD><TD background='images/$skin/5.gif'></TD><TD><IMG src='images/$skin/9.gif' width=14 height=12 border=0></TD></TR>
</TBODY></TABLE>
";


if ($msginout=="1") {$whm=$fm; $whe=$lm;} else {$whm=$lm; $whe=$fm;}
} while($whm < $whe);




// выводим СПИСОК доступных номеров СТРАНИЦ ВНИЗУ
print "Страницы:&nbsp; ";
for($i=0; $i<$maxi+1;) {$ip=$i/$qq+1;
if ($page==$ip) {print "<B>$ip</B> &nbsp;";} else {print "<a href=\"index.php?page=$ip\">$ip</a> &nbsp;";}
$i=$i+$qq;}



print "<BR><BR><center><font size=-2>Powered by <a href='http://www.wr-script.ru/'>WR-Guest</a> &copy; 1.7M</font></body></html>";
?>
                    </section>
            </article>





            
            <section class="new">
                <h2 class="new__title">Новое на сайте</h2>
                    <ul class="new__list">
                        <li class="new__item"><a href="#">Гидравлические сопротивления | Потери давления на трение</a></li>
                        <li class="new__item"><a href="#">Как изучить грамматику английского языка?</a></li>
                        <li class="new__item"><a href="#">Кислород, азот, аргон — безопасность при производстве и применении | Файнштейн В.И. | Скачать книгу</a></li>
                        <li class="new__item"><a href="#">Холодильные машины и установки | Лашутина Н. Г., Верхова Т. А., Суедов В. П. | Скачать книгу</a></li>
                    </ul>
            </section> 
            
            <div class="popular"> 
                <section class="popular__article">
                    <h3>Популярные статьи на сайте</h3>
                    <ul>
                        <li>   
                            <img src="img/bernulli_mini.jpg" alt="Бернулли">
                            <a href="#" class="popular-a">Уравнение Бернулли - основное уравнение гидравлики</a>
                        </li>
                        <li>   
                            <img src="img/plotnost_mini.jpg" alt="Плотность">
                            <a href="#">Плотность и удельный вес жидкостей | Плотность воды, масла, спирта, керосина, бензина и нефти</a>
                        </li>
                        <li>   
                            <img src="img/programm2_mini.jpg" alt="Программа">
                                <a href="#">Перевод единиц измерений. Конвертер единиц давления</a>
                            </li>
                    </ul>
                </section>
                <section class="popular__book">
                    <h3>Популярные книги на сайте</h3>
                    <ul>
                        <li>   
                            <img src="img/bashta.jpg" alt="Белки">
                            <a href="#">Суточная потребность в белках, жирах и углеводах</a>
                        </li>
                        <li>   
                            <img src="img/zadach_1.jpg" alt="Белки">
                            <a href="#">Суточная потребность в белках, жирах и углеводах</a>
                        </li>
                        <li>   
                            <img src="img/vilner_2.png" alt="Белки">
                            <a href="#">Суточная потребность в белках, жирах и углеводах</a>
                        </li>
                    </ul>
                </section>
            </div>

        </main>

        <aside class="aside">
            <div class="aside__google"><div class="aside__google"><img src="img/Google.jpg" alt="Реклама"></div></div>
        </aside>

        <footer class="footer">
            <nav>
                <ul class="nav-footer">
                    <li><a href="#">Главная</a> | </li>
                    <li><a href="#">Контакты</a> | </li>
                    <li><a href="#">Карта сайта</a> | </li>
                    <li><a href="#">Подписаться на RSS</a> | </li>
                    <li><a href="#">Рассылка по Email</a> | </li>
                    <li><a href="#">Гостевая книга</a></li>
                </ul>
            </nav>
            
            <!--
            <div>
                <a href="" class="social-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800" width = "30" heigh ="30">
                        <path d="M393 566c-135 0-208-143-276-285-10-21 6-23 16-23l81-1c12 0 17 9 20 15 13 31 
                                66 142 92 129 18-9 15-107 4-122-7-9-20-12-26-13-5-1 3-11 13-16 18-9 87-9 
                                111-3 28 7 19 32 19 95 0 20-4 50 11 58 24 12 81-101 91-131 3-8 9-11 
                                19-11h85c20 0 27 1 30 8 5 12-9 40-44 87-57 77-65 70-17 114 46 42 55 
                                63 57 66 14 28-11 34-21 34h-76c-9 0-21 0-38-11-29-19-55-70-76-64-17 
                                5-20 34-21 53-1 16-10 21-20 21h-34z" fill = "white">
                    </svg>
                </a>
                <a href="" class="social-button">
                    <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg" width = "30" heigh ="30">
                        <path d="M679 239s-21 34-55 57c7 156-107 329-314 329-103 0-169-50-169-50s81 17 163-45c-83-5-103-77-103-77s23 6 
                                50-2c-93-23-89-110-89-110s23 14 50 14c-84-65-34-148-34-148s76 107 228 
                                116c-22-121 117-177 188-101 37-6 71-27 71-27s-12 41-49 61c30-2 63-17 63-17z" fill = "white">
                    </svg>
                </a>
                <a href="" class="social-button">
                    <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg" width = "30" heigh ="30">
                        <path d="M445 643h-90V419h-75v-87h75v-64q0-55 32-86 30-29 80-29 28 0 67 3v78h-47q-42 0-42 38v60h86l-11 87h-75v224z" fill = "white">
                    </svg>
                </a>
                <a href="" class="social-button">
                    <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg" width = "30" heigh ="30">
                        <path d="M487 370c21 129-62 237-195 237-114 0-207-93-207-207s93-207 207-207c89 0 138 
                             54 138 54l-56 54s-29-32-82-32c-71 0-128 59-128 131 0 73 57 131 128 131 81 0 113-58 
                            117-90H292v-71h195zm189-59v59h59v60h-59v59h-59v-59h-59v-60h59v-59h59z" fill = "white">
                        </svg>
                    </a>
            </div>
            -->

            <p class="all_rights">&copy;2009-2020 Techgidravlika.ru. При использовании материалов сайта активная ссылка на сайт обязательна!</p>
        </footer>			
    </div>
    <!--<script src="js/jquery-3.4.1.js"></script>-->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/script.js"></script>
    
    <script>
//document.body.scrollTop < 20   window.pageYOffset > 1
        if(document.body.scrollTop < 20)
        {
            window.addEventListener('scroll', function()
            {
                var x = document.getElementsByClassName("header")[0];
                x.setAttribute("class","header scroll");
            });
        }
        if (document.body.scrollTop > 20){
            var x = document.getElementsByClassName("header")[0];
            x.setAttribute("class","header");
        }
</script>		
</body>
</html>
