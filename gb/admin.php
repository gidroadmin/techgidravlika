<? // WR-guest v 1.7M //  07.01.07 г.  //  Miha-ingener@yandex.ru

#error_reporting (E_ALL);

include "config.php";

// Авторизация
$adminname="1"; // имя администратора
$adminpass=$password;

// Выбран ВЫХОД из форума - очищаем куки
if(isset($_GET['event'])) { if ($_GET['event']=="clearcooke") { setcookie("gbcookies", "", time()); Header("Location: index.php"); exit; } }


if (!isset($_COOKIE['gbcookies']))  {

if (!isset($_POST['name']) & !isset($_POST['pass'])) {
echo "<html><head><META HTTP-EQUIV='Pragma' CONTENT='no-cache'><META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'><META content='text/html; charset=windows-1251' http-equiv=Content-Type><link rel=stylesheet type='text/css' href='images/$skin/style.css'></head><body>
<BR><BR><BR><center>
<form action='admin.php' method=POST name=pswrd>
Введите пароль: <BR>
<input type=password size=17 name=pass><BR>
<input type=hidden size=17 name=name value=\"$adminname\"><BR>

<input type=submit value='Войти'>
<SCRIPT language=JavaScript>document.pswrd.pass.focus();</SCRIPT><BR><BR><BR>";
print "<BR><BR><center><font size=-2>Powered by <a href='http://www.wr-script.ru/'>WR-Guest</a> &copy; 1.7</font></body></html>";
exit;}

$name=str_replace("|","I",$_POST['name']); $pass=str_replace("|","I",$_POST['pass']);
$text="$name|$pass|";
$text=trim($text); // Вырезает ПРОБЕЛьные символы 
if (strlen($text)<4) {print"$back Вы не ввели имя или пароль!"; exit;}
$text=preg_replace( "/<script/i",' ',$text);
$text=str_replace( "<!--"   ,'&#60;&#33;--',$text);
$text=str_replace( "-->"    ,'--&#62;'     ,$text);
$text=str_replace( "&#032;" ,' '     ,$text);
$text=str_replace( "&"      ,'&amp;' ,$text);
$text=str_replace( ">"      ,'&gt;'  ,$text);
$text=str_replace( "<"      ,'&lt;'  ,$text);
$text=str_replace( "\""     ,'&quot;',$text);
$text=preg_replace( "/\n\n/",'<p>'   ,$text);
$text=preg_replace( "/\n/"  ,'<br>'  ,$text);
$text=preg_replace( "/\\\$/",'&#036;',$text);
$text=preg_replace( "/\r/"  ,''      ,$text);
$text=preg_replace( "/\\\/",'&#092;',$text);
$text=str_replace("\r\n","<br>", $text);
$text=str_replace("\n\n",'<p>',$text);
$text=str_replace("\n",'<br>',$text);
$text=str_replace("\t",'',$text);
$text=str_replace("\r",'',$text);
$text=str_replace('   ',' ',$text);
$exd=explode("|",$text); $name=$exd[0]; $pass=$exd[1];

// Сверяем введённое имя/пароль с заданным в конфиг файле
if ($name==$adminname & $pass==$adminpass)  {
$tektime=time();
$gbcookies="$adminname|$adminpass|$tektime|";
setcookie("gbcookies", $gbcookies, time()+300);
Header("Location: admin.php"); exit;}
print "$back Ваш данные <B>НЕ верены</B>!</center>"; exit;
}  




// Авторизация пройдена успешно
else {$gbc=$_COOKIE['gbcookies']; $gbc=explode("|", $gbc); $gbname=$gbc[0];$gbpass=$gbc[1];$gbtime=$gbc[2];}




// Блок УДАЛЕНИЯ выбранного сообщения
if (isset($_GET['id'])) { $page=$_GET['page'];
$file=file("guest.dat"); $itogo=count($file)-1;
if ($msginout==1) {$id=$itogo-$_GET['id'];} else {$id=$itogo-$_GET['id']+2;}
if ($itogo<1) {print"$back. Нужно оставить хотябы одно сообщение!"; exit;}

$fp=fopen("guest.dat","w");
flock ($fp,LOCK_EX);
for ($i=0;$i< sizeof($file);$i++) { if ($i==$id) {unset($file[$i]);} }
fputs($fp, implode("",$file));
flock ($fp,LOCK_UN);
fclose($fp);
@chmod("guest.dat", 0644);
Header("Location: admin.php?pswrd=$password&page=$page"); exit; }



if (isset($_GET['event'])) {

if ($_GET['event']=="add") { // if ($event =="add")

$name=$_POST['name']; $msg=$_POST['msg']; $email=$_POST['email']; 
if (isset($_POST['page'])) {$page=$_POST['page'];} else {$page=1;}

if ($name=="" || strlen($name) > $maxname) {print "$back вы не ввели имя, или вввели слишком длинное имя!</B></center>"; exit;}
if ($msg=="" || strlen($msg) > $maxmsg) {print "$back ваше сообщение или пустое или превышает $maxmsg символов.</B></center>"; exit;}

// обрезаем лишние символы в емайле и сообщении
$email=substr($email,0,30);
$msg=stripslashes($msg);
$msg=htmlspecialchars($msg);
$msg=str_replace("|","I",$msg);
$msg=str_replace("\r\n","<br>",$msg);


// если выбрано - редактирование
if (isset($_GET['rd'])) { $rd=$_GET['rd'];
$fdate=$_POST['fdate'];$ftime=$_POST['ftime']; //$rd - номер РЕДАКТИРУЕМОЙ ячейки
$text="$msg|$name|$email|$fdate|$ftime|";
$file=file("guest.dat");
$fp=fopen("guest.dat","a+");
flock ($fp,LOCK_EX);
ftruncate ($fp,0);//УДАЛЯЕМ СОДЕРЖИМОЕ ФАЙЛА
for ($i=0;$i< sizeof($file);$i++) {if ($rd!=$i) {fputs($fp,$file[$i]);} else {fputs($fp,"$text\r\n");}}
fflush ($fp);//очищение файлового буфера
flock ($fp,LOCK_UN);
fclose($fp);
@chmod("guest.dat", 0644);
}


else {
$text="$msg|$name|$email|$date|$time|";
$fp=fopen("guest.dat","a+");
flock ($fp,LOCK_EX);
fputs($fp,"$text\r\n");
fflush ($fp);//очищение файлового буфера
flock ($fp,LOCK_UN);
fclose($fp);
@chmod("guest.dat", 0644);
}

Header("Location: admin.php?pswrd=$password&page=$page"); exit; }





if ($_GET['event']=="skin")  {

if ($sendmail=="1") {$s1="checked"; $s2="";} else {$s2="checked"; $s1="";}
if ($antiflud=="1") {$af1="checked"; $af2="";} else {$af2="checked"; $af1="";}
if ($liteurl=="1") {$lu1="checked"; $lu2="";} else {$lu2="checked"; $lu1="";}

print "<html><head><META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\"><META HTTP-EQUIV=\"Cache-Control\" CONTENT=\"no-cache\"><META content='text/html; charset=windows-1251' http-equiv=Content-Type><link rel=stylesheet type='text/css' href='images/$skin/style.css'></head><body><BR><BR><BR><center>

<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TR><TD width='1%'><IMG src='images/$skin/1.gif' width=14 height=12 border=0></TD><TD width='96%' background='images/$skin/2.gif'></TD><TD width='3%'><IMG src='images/$skin/3.gif' width=14 height=12 border=0></TD></TR>
<TR><TD background='images/$skin/4.gif'></TD>
<TD><table width=100%><TR>
<TD><B>Сегодня <b>$date</b></TD>
<TD align=center><B><a href=admin.php?pswrd=$password&event=skin>Конфигурирование</a></TD>
<TD align=center><B><a href='admin.php?pswrd=$password'>Главная админки</a></div></B>
<TD align=center><B><a href='admin.php?event=clearcooke'>Вернуться на главную</a></div></B>
</TD></TR>
<TR><TD colspan=4><hr size=-1 width=100%></TD></TR></TABLE>

<table width=100%><TR><TD>
<center><B><font size=+1>Конфигурирование</font></b>

<form action=admin.php?pswrd=$password&event=config method=POST name=REPLIER>
<table>
<tr><td>Имя скрипта</td><td><input type=text value='$gname' name=gname size=50></tr></td>
<tr><td>Текст приветствия</td><td><textarea cols=50 rows=4 size=500 name=maintext>$maintext</textarea></tr></td>
<tr><td>Емайл админа / отсылать сообщения</td><td><input type=text value='$adminemail' name=adminemail size=30>&nbsp;&nbsp;&nbsp;&nbsp; <input type=radio name=sendmail value=\"1\"$s1/> да&nbsp;&nbsp; <input type=radio name=sendmail value=\"0\"$s2/> нет</tr></td></tr></td>

<tr><td>Задействовать функцию <B>АНТИСПАМ</B>?</td><td><select class=input name=antispam>
<option value=\"$antispam\">Не менять</option>
<option value='0'>Нет, отключить</option>
<option value='1'>Да - Цифротекст</option>
<option value='2'>Да - Матоперации</option>
<option value='3'>Да - Загадки</option>
<option value='4'>Да - Цифрозащита</option>
</select></tr></td>

<tr><td class=row1>Задействовать функцию <B>АНТИФЛУД</B>?</td><td class=row1><input type=radio name=antiflud value=\"1\"$af1/> да&nbsp;&nbsp; <input type=radio name=antiflud value=\"0\"$af2/> нет</tr></td>
<tr><td class=row1>Делать ссылки в тексте <B>активными</B>?</td><td class=row1><input type=radio name=liteurl value=\"1\"$lu1/> да&nbsp;&nbsp; <input type=radio name=liteurl value=\"0\"$lu2/> нет</tr></td>


<tr><td>Пароль админа</td><td><input type=text value='$password' name=password size=15></tr></td>
<tr><td>Макс. длина имени</td><td><input type=text value='$maxname' name=maxname size=10></tr></td>
<tr><td>Макс. длина сообщения</td><td><input type=text value='$maxmsg' name=maxmsg size=10></tr></td>
<tr><td>Сообщений на страницу</td><td><input type=text value='$qq' name=qq size=10></tr></td>
<tr><td>Cледование сообщений</td><td><select class=input name=msginout><option value='$msginout'>Текущее</option><option value='1'>по убыванию</option><option value='0'>по возрастанию</option></select></tr></td>

<tr><td>Скин</td><td><select class=input name=skin>

<option value=\"$skin\">Текущий</option>
<option value='original' style='color: #000000; background: #FF0000'>Светло-красный</option>
<option value='black' style='color: #000000; background: #FFFFFF'>Чёрно-белый</option>
<option value='blue' style='color: #FFFFFF; background: #0086BF'>Тёмно-голубой</option>
<option value='korich' style='color: #FFFFFF; background: #968549'>Коричневый</option>

</select></nobr></tr></td>

<tr><td colspan=2><center><table><tr><td><input type=submit value='Сохранить конфигурацию'></form></td></tr></table>
</td></tr></table>

</TD></TR></TABLE></TD>
<TD background='images/$skin/6.gif'>&nbsp;</TD>
</TR><TR><TD><IMG src='images/$skin/8.gif' width=14 height=12 border=0></TD><TD background='images/$skin/5.gif'></TD><TD><IMG src='images/$skin/9.gif' width=14 height=12 border=0></TD></TR>
</TBODY></TABLE>
";
exit;
}



if ($_GET['event']=="config")  {

$configdata="<? // WR-guest v 1.7M //  07.01.07 г.  //  Miha-ingener@yandex.ru\r\n".
"$"."gname=\"".$_POST['gname']."\"; // Имя гостевой книги отображается в теге TITLE и заголовке\r\n".
"$"."maintext=\"".$_POST['maintext']."\"; // Текст, выводящийся перед формой ввода сообщения\r\n".
"$"."adminemail=\"".$_POST['adminemail']."\"; // Емайл админа\r\n".
"$"."sendmail=\"".$_POST['sendmail']."\"; // отсылать сообщения на Емайл админу\r\n".
"$"."password=\"".$_POST['password']."\"; // Пароль админа\r\n".
"$"."antispam=\"".$_POST['antispam']."\"; // АНТИСПАМ вкл1/вкл2/вкл3/вкл4/выкл - 1/2/3/4/0\r\n".
"$"."antiflud=\"".$_POST['antiflud']."\"; // Функцию АНТИФЛУД вкл/выкл: 1/0\r\n".
"$"."maxname=\"".$_POST['maxname']."\";  // Максимальное кол-во символов в имени\r\n".
"$"."maxmsg=\"".$_POST['maxmsg']."\"; // Максимальное кол-во символов в сообщении\r\n".
"$"."msginout=\"".$_POST['msginout']."\"; // порядок просмотра сообщений: возрастание/убывание - 1/0\r\n".
"$"."qq=\"".$_POST['qq']."\"; // кол-во отображаемых сообщений на каждой странице гостевой: 1-100\r\n".
"$"."skin=\"".$_POST['skin']."\";  // Скин\r\n".
"$"."liteurl=\"".$_POST['liteurl']."\";// Подсвечивать УРЛ? 1/0\r\n".
"$"."back=\"<center>Вернитесь <a href='javascript:history.back(1)'><B>назад</B></a>\"; // Удобная строка\r\n".
"$"."s2=\"<img src='images/biggrin.gif' border=0>\";  // Смайлики ;-)\r\n".
"$"."s1=\"<img src='images/smile.gif' border=0>\";\r\n".
"$"."s3=\"<img src='images/razz.gif' border=0>\";\r\n".
"$"."s4=\"<img src='images/cool.gif' border=0>\";\r\n".
"$"."s5=\"<img src='images/mad.gif' border=0>\";\r\n".
"$"."s6=\"<img src='images/redface.gif' border=0>\";\r\n".
"$"."s7=\"<img src='images/wink.gif' border=0>\";\r\n".
"$"."s8=\"<img src='images/rolleyes.gif' border=0>\";\r\n".
"$"."s9=\"<img src='images/confused.gif' border=0>\";\r\n".
"$"."s10=\"<img src='images/eek.gif' border=0>\";\r\n".
"$"."s11=\"<img src='images/cry.gif' border=0>\";\r\n".
"$"."s12=\"<font color=#ff0000><B>\";\r\n".
"$"."date=date(\"d.m.Y\"); // число.месяц.год\r\n".
"$"."time=date(\"H:i:s\"); // часы:минуты:секунды \r\n?>";

$file=file("config.php");
$fp=fopen("config.php","a+");
flock ($fp,LOCK_EX);
ftruncate ($fp,0);//УДАЛЯЕМ СОДЕРЖИМОЕ ФАЙЛА
fputs($fp,$configdata);
fflush ($fp);//очищение файлового буфера
flock ($fp,LOCK_UN);
fclose($fp);
@chmod("config.php", 0644);
Header("Location: admin.php?pswrd=$password&event=skin"); exit; }

} // if isset['event']


else {

if (isset($_GET['page'])) {$page=$_GET['page'];} else {$page="1";}

print "<html><head>
<title>$gname</title>
<META HTTP-EQUIV='Pragma' CONTENT='no-cache'>
<META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'>
<META content='text/html; charset=windows-1251' http-equiv=Content-Type>
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
<TD align=center><B><a href=admin.php?pswrd=$password&event=skin>Конфигурирование</a></TD>
<TD align=center><B><a href='admin.php?pswrd=$password'>Главная админки</a></div></B>
<TD align=center><B><a href='admin.php?event=clearcooke'>Вернуться на главную</a></div></B>
</TD></TR></TABLE>
</TD>
<TD background='images/$skin/6.gif'>&nbsp;</TD>
</TR><TR><TD><IMG src='images/$skin/8.gif' width=14 height=12 border=0></TD><TD background='images/$skin/5.gif'></TD><TD><IMG src='images/$skin/9.gif' width=14 height=12 border=0></TD></TR>
</TBODY></TABLE>";



if ((!isset($_GET['event'])) or (isset($_GET['event'])) & ($_GET['event']!="add"))  {
$lines=file("guest.dat");
$itogo=count($lines);
$maxi=$itogo-1;
print "
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TR><TD width='1%'><IMG src='images/$skin/1.gif' width=14 height=12 border=0></TD><TD width='96%' background='images/$skin/2.gif'></TD><TD width='3%'><IMG src='images/$skin/3.gif' width=14 height=12 border=0></TD></TR>
<TR><TD background='images/$skin/4.gif'></TD>
<TD><center><b><font size=+1>Всего сообщений в базе: <font color=#FF0000>$itogo</font>, добавь ещё!</font></b></center>
<center><table ><tr><td valign=top>
<B>Имя</B> и E-mail<BR>
<B>Сообщение</B>
<table width=90 height=70><tr><td valign=top>
<A href='javascript:%20x()' onclick=\"DoSmilie(' :-))');\">$s1</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-)');\">$s2</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-P');\">$s3</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' 8-)');\">$s4</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-(');\">$s5</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' :-O');\">$s6</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' ;-)');\">$s7</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(':roll:');\">$s8</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(':rf:');\">$s9</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' 8-(');\">$s10</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' `-(');\">$s11</a>
<A href='javascript:%20x()' onclick=\"DoSmilie('[RB] [/RB]');\"><font color=red><B>RB</b></font></a>
</tr></td></table>
</td><td>
";  


// ищем сообщение для редактирования и выводим его в форму
if (isset($_GET['rd']))  {
if ($msginout==1) {$rd=$maxi-$_GET['rd'];} else {$rd=$maxi-$_GET['rd']+2;}

$dt=explode("|",$lines[$rd]);
$dt[0]=str_replace("<br>", "\r\n", $dt[0]);

print "
<form action=admin.php?pswrd=$password&event=add&rd=$rd method=POST name=REPLIER>
<input type=text value='$dt[1]' name=name size=30>&nbsp;
<input type=text value='$dt[2]' name=email size=26><br> 
<textarea cols=59 rows=10 size=500 name=msg>$dt[0]</textarea>
<input type=hidden name=fdate value='$dt[3]'> 
<input type=hidden name=ftime value='$dt[4]'>
<input type=hidden name=page value='$page'>
<SCRIPT language=JavaScript>document.REPLIER.msg.focus();</SCRIPT>
<center><input type=submit value='Сохранить под этим же номером'></form>
";
}
else 
{
print "<form action=admin.php?pswrd=$password&event=add method=post name=REPLIER>
<input type=text value='' name=name size=30>&nbsp;
<input type=text value='' name=email size=26><br> 
<textarea cols=59 rows=10 size=500 name=msg></textarea>
<SCRIPT language=JavaScript>document.REPLIER.msg.focus();</SCRIPT>
<center><input type=submit value='Добавить'></form>";
}
print"</tr></td></table>

</TD><TD background='images/$skin/6.gif'>&nbsp;</TD>
</TR><TR><TD><IMG src='images/$skin/8.gif' width=14 height=12 border=0></TD><TD background='images/$skin/5.gif'></TD><TD><IMG src='images/$skin/9.gif' width=14 height=12 border=0></TD></TR>
</TBODY></TABLE>";



// Выводим qq сообщений на текущей странице

if ($page=="0") {$page="1";} else {$page=abs($page);}

$maxpage=ceil(($maxi+1)/$qq); if ($page>$maxpage) {$page=$maxpage;}

if ($msginout=="1") 
{ $fm=$qq*($page-1); if ($fm>$maxi) {$fm=$maxi-$qq;}
  $lm=$fm+$qq; if ($lm>$maxi) {$lm=$maxi+1;} }
else 
{ $fm=$maxi-$qq*($page-1); if ($fm<"0") {$fm=$qq;}
  $lm=$fm-$qq; if ($lm<"0") {$lm="-1";} }


do { $dt = explode("|", $lines[$fm]);
if ($msginout=="1") {$fm++;} else {$fm--;}
$num=$itogo-$fm; $pnum=$num-1;
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
$dt[0]=eregi_replace("((https?|ftp)://[[:alnum:]_=/-]+(\\.[[:alnum:]_=/-]+)*(/[[:alnum:]+&._=/~%]*(\\?[[:alnum:]?+&;_=/%]*)?)?)", "<a href='\\1' target='_blank'>\\1</a>", $dt[0]);


print"
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TR><TD width='1%'><IMG src='images/$skin/1.gif' width=14 height=12 border=0></TD><TD width='96%' background='images/$skin/2.gif'></TD><TD width='3%'><IMG src='images/$skin/3.gif' width=14 height=12 border=0></TD></TR>
<TR><TD background='images/$skin/4.gif'></TD>
<TD><B><a href='mailto:$dt[2]'>$dt[1]</a> ($dt[3] $dt[4])</B><BR>
<em>$dt[0]</em><BR>
<div align=right>

<table><TR><TD bgcolor=#22FF44>
<B><a href='admin.php?pswrd=$password&rd=$num&page=$page'>.P.</a></TD><TD>&nbsp;&nbsp;</TD><TD bgcolor=#FF2244><a href='admin.php?pswrd=$password&id=$num&page=$page'>.X.</a></B></TD><TD> &nbsp;&nbsp; $pnum
</TD></TR></TABLE>
</div>
</TD>
<TD background='images/$skin/6.gif'>&nbsp;</TD>
</TR><TR><TD><IMG src='images/$skin/8.gif' width=14 height=12 border=0></TD><TD background='images/$skin/5.gif'></TD><TD><IMG src='images/$skin/9.gif' width=14 height=12 border=0></TD></TR>
</TBODY></TABLE>
";



if ($msginout=="1") {$whm=$fm; $whe=$lm;} else {$whm=$lm; $whe=$fm;}
} while($whm < $whe);
print "</td></tr></table>";


// выводим СПИСОК доступных номеров СТРАНИЦ ВНИЗУ
print "Страницы:&nbsp; ";
for($i=0; $i<$maxi+1;) {$ip=$i/$qq+1;
if ($page==$ip) {print "<B>$ip</B> &nbsp;";} else {print "<a href='admin.php?pswrd=$password&page=$ip'>$ip</a> &nbsp;";}
$i=$i+$qq;} print "(дробление = <B>$qq</B>)";
}

}



print "<BR><BR><center><font size=-2>Powered by <a href='http://www.wr-script.ru/'>WR-Guest</a> &copy; 1.7</font></body></html>";
?>
