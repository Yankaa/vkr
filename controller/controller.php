<?php
/**
 * Controller
 */

defined('MVC') or die('Access denied');

session_start();

// подключение модели
require_once MODEL;



$view = empty($_GET['view']) ? 'content' : $_GET['view'];

//регистрация);
if($_POST['reg']){
    //registration();
   // redirect();
}


// авторизация
if($_POST['auth']){
    authorization();
 // redirect();
}


// выход пользователя
if($_GET['do'] == 'logout'){
    logout();
   redirect();
}

$view = empty($_GET['view']) ? 'content' : $_GET['view'];


$showdisciplines = ShowDiscipline();
$showdisciplines1 = ShowDiscipline1();
//$showdirections = ShowDirection();

$id = $shownabor["id_direction"];

if($_POST['create']) {
	CreateDOCX();
}

if($_POST['create1']) {
	if (empty($_POST['needs']) or empty($_POST['target'])) {
		$err = 'Значения пустые! Заполните поля';
	} else { 
		CreateDOCX1();
	}
	
}





if($_POST['create2']) {
	CreateDOCX2();
}

if($_POST['create3']) {
	CreateDOCX3();
}


if($_POST['create4']) {
	if (empty($_POST['resourse'])) {
		$err = 'Значения пустые! Заполните поля';
	} else { 
		CreateDOCX4();
	}
	
}



/*if($_POST['create'] and $_POST['direction']) {
	CreateDOCX();
}*/


require_once 'view/default/index.php';
//require_once 'admin/index.php';

?> 