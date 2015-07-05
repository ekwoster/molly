<?php
	//Укажите здесь свой имейл
	define('__MAIL__','email@email.com'); 
	
	//Здесь можно изменить желаемую тему письма
	define('__SUBJECT__','Найдена ошибка на сайте'); 
	
	//Здесь можно изменить шаблон письма.
	//Важно оставить в тексте 2 переменных {page} - данные о странице и {phrase} - данные с текстом
	define('__MESSAGE__','Найдена ошибка на странице {page}. Пользователь посчитал ошибкой фразу: {phrase}.'); 

	$data['{page}']=$_SERVER['HTTP_REFERER'];
	$data['{phrase}']=$_POST['text'];

	mail(__MAIL__, __SUBJECT__, strtr(__MESSAGE__, $data));
	die();