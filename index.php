<?php 
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // определитель языка
if ($lang == "ru"){
    header("Location: http://jointprojects.tk/ru.html"); // если ты русский то ты русский
}else{
    header("Location: http://jointprojects.tk/en.html"); // если ты не русский то ты англичанин
}
die(); // умер
?>
