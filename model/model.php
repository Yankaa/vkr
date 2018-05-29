ё<?php

/**
 * Model
 */

defined('MVC') or die('Access denied');
require_once 'config/config.php';

/* ===Авторизация=== */
function authorization(){
    $login = mysql_real_escape_string(trim($_POST['login']));
    $pass = trim($_POST['pass']);
    
    if(empty($login) OR empty($pass)){
        // если пусты поля логин/пароль
        $_SESSION['auth']['error'] = "<div class='error'>Поля логин/пароль должны быть заполнены!</div>";
    }else{
        // если получены данные из полей логин/пароль
        $pass = md5($pass);
        
        $query = "SELECT name FROM reg WHERE login = '$login' ";
        $res = mysql_query($query) or die(mysql_error());
        if(mysql_num_rows($res) == 1){
            // если авторизация успешна
            $row = mysql_fetch_row($res);
            $_SESSION['auth']['user'] = $row[0];
        }else{
            // если неверен логин/пароль
            $_SESSION['auth']['error'] = "<div class='error'>Логин/пароль введены неверно!</div>";
        }
    }
}


function ShowDiscipline () {
    $query = "SELECT * FROM years";
    $res = mysql_query($query) or die(mysql_error());
    $showdisciplines = array();
    while($row = mysql_fetch_assoc($res)) {
        $showdisciplines[] = $row;
    }
    return $showdisciplines;
}

function ShowDiscipline1 () {

    $query = "SELECT discipline FROM years WHERE year = discipline ";
    $res = mysql_query($query) or die(mysql_error());
    $showdisciplines1 = array();
    while($row = mysql_fetch_assoc($res)) {
        $showdisciplines1[] = $row;
    }
    return $showdisciplines1;
}

function ShowDirection () {
    $query = "SELECT direction FROM direction WHERE id = 1";
    $res = mysql_query($query) or die(mysql_error());
    $showdirections = array();
    while($row = mysql_fetch_assoc($res)) {
        $showdirections[] = $row;
    }
    return $showdirections;
}




function CreateDOCX () {
$file = 'Z:\home\vkr.loc\www\docx\123.docx'; 
$copy = 'D:\NewFile.docx'; 
copy($file, $copy);
$contentFile = "word/document.xml";
$zip = new ZipArchive; 

require_once 'Classes/PHPExcel.php';
$Excel = PHPExcel_IOFactory::load('zxc.xls'); ?>
<?php foreach ($Excel->getWorksheetIterator() as $worksheet) {
    // выгружаем данные из объекта в массив
    $lists[] = $worksheet->toArray();
    foreach($lists as $list){ }

} 

if ($zip->open($copy)) { 
if (($index = $zip->locateName($contentFile)) !== false) { 
//$col = array('name_of_discipline', );
$placeholders = array('name_of_discipline', 'kod','direction', 'profil', 'yroven', 'date' );
$values = array($list[0][1], $list[1][1], $list[2][1],$list[3][1],$list[4][1],$list[5][1] );
$content = $zip->getFromIndex($index); 
$content = str_replace($placeholders, $values, $content);
$zip->addFromString($contentFile, $content); 
} 
$zip->close(); 
}
}


function CreateDOCX1 () {
$file = 'D:\NewFile.docx'; 
$copy = 'D:\NewFile1.docx'; 
copy($file, $copy);
$contentFile = "word/document.xml";
$zip = new ZipArchive; 

if ($zip->open($copy)) { 
if (($index = $zip->locateName($contentFile)) !== false) { 
//$col = array('name_of_discipline', );
$placeholders = array('target', 'needs');
$values = array($_POST['target'], $_POST['needs'] );
$content = $zip->getFromIndex($index); 
$content = str_replace($placeholders, $values, $content);
$zip->addFromString($contentFile, $content); 
} 
$zip->close(); 
}
}



function CreateDOCX2 () {
$file = 'D:\NewFile1.docx'; 
$copy = 'D:\NewFile2.docx'; 
copy($file, $copy);
$contentFile = "word/document.xml";
$zip = new ZipArchive; 

//$findColor = is_array($_POST['inform']) ? $_POST['inform'] : array();
//foreach ($findColor as $id){ $allColors .= $id; }
if ($zip->open($copy)) { 
if (($index = $zip->locateName($contentFile)) !== false) { 
//$col = array('name_of_discipline', );
$inform = $_POST['inform']; // Принимаем массив данных с всех checkbox и заносим в переменную
$x = '';
if (is_array($inform)) { // Проверяем, является ли эта переменная массивом данных, если да, то исполняем код в цикле for, если нет, выходим из выполнения скрипта
foreach ($inform as $key => $value) {
$x = $x."\p".$value; 
echo $value;
}}
//$findColor = is_array($_POST['inform']) ? $_POST['inform'] : array();
//foreach ($findColor as $id){ $allColors .= $id; }
$placeholders = array('osnovnya', 'dopolnit', 'period', 'inform');
$values = array($_POST['osnovnya'], $_POST['dopolnit'], $_POST['period'], $x );
$content = $zip->getFromIndex($index); 
$content = str_replace($placeholders, $values, $content);
$zip->addFromString($contentFile, $content); 
} 
$zip->close(); 
}
}


function CreateDOCX3 () {
$file = 'D:\NewFile2.docx'; 
$copy = 'D:\NewFile3.docx';
copy($file, $copy);
$contentFile = "word/document.xml";
$zip = new ZipArchive; 

require_once 'Classes/PHPExcel.php';
$Excel = PHPExcel_IOFactory::load('zxc3.xlsx'); ?>
<?php foreach ($Excel->getWorksheetIterator() as $worksheet) {
    // выгружаем данные из объекта в массив
    $lists[] = $worksheet->toArray();
    foreach($lists as $list){ }

} 

if ($zip->open($copy)) { 
if (($index = $zip->locateName($contentFile)) !== false) { 
//$col = array('name_of_discipline', );
$placeholders = array( 
'Z1', 'Z2', 'Z3','Z4','Z5', 'Z6','Z7','Z8','Z9','X1','X2','X3',
'X4','X5','X6','X7','X8','X9', 'C1','C2','C3','C4','C5','C6', 'C7','C8','C9',
'V1','V2','V3','V4','V5','V6', 'V7','V8','V9',
'B1','B2','B3','B4','B5','B6', 'B7','B8','B9',
'N1','N2','N3','N4','N5','N6', 'N7','N8','N9',
'M1','M2','M3','M4','M5','M6', 'M7','M8','M9',
'A1','A2','A3','A4','A5','A6', 'A7','A8','A9',
'S1','S2','S3','S4','S5','S6', 'S7','S8','S9',
'D1','D2','D3','D4','D5','D6', 'D7','D8','D9',    
'F1','F2','F3','F4','F5','F6', 'F7','F8','F9',
'G1','G2','G3','G4','G5','G6', 'G7','G8','G9'
 );
$values = array
(
$list[1][1], $list[2][1], $list[3][1], $list[4][1], $list[5][1], $list[6][1], $list[7][1], $list[8][1], $list[9][1], $list[10][1], $list[11][1], $list[12][1],
$list[1][2], $list[2][2],$list[3][2], $list[4][2], $list[5][2], $list[6][2], $list[7][2], $list[8][2], $list[9][2], $list[10][2], $list[11][2],$list[12][2], 
$list[1][3], $list[2][3], $list[3][3], $list[4][3], $list[5][3], $list[6][3],$list[7][3], $list[8][3],$list[9][3], $list[10][3], $list[11][3], $list[12][3], 
$list[1][4], $list[2][4], $list[3][4], $list[4][4], $list[5][4], $list[6][4],$list[7][4], $list[8][4],$list[9][4], $list[10][4], $list[11][4], $list[12][4],
$list[1][5], $list[2][5], $list[3][5], $list[4][5], $list[5][5], $list[6][5],$list[7][5], $list[8][5],$list[9][5], $list[10][5], $list[11][5], $list[12][5],
$list[1][6], $list[2][6], $list[3][6], $list[4][6], $list[5][6], $list[6][6],$list[7][6], $list[8][6],$list[9][6], $list[10][6], $list[11][6], $list[12][6],
$list[1][7], $list[2][7], $list[3][7], $list[4][7], $list[5][7], $list[6][7],$list[7][7], $list[8][7],$list[9][7], $list[10][7], $list[11][7], $list[12][7],
$list[1][8], $list[2][8], $list[3][8], $list[4][8], $list[5][8], $list[6][8],$list[7][8], $list[8][8],$list[9][8], $list[10][8], $list[11][8], $list[12][8],
$list[1][9], $list[2][9], $list[3][9], $list[4][9], $list[5][9], $list[6][9],$list[7][9], $list[8][9],$list[9][9], $list[10][9], $list[11][9], $list[12][9],
$list[1][10], $list[2][10], $list[3][10], $list[4][10], $list[5][10], $list[6][10],$list[7][10], $list[8][10],$list[9][10]);
$content = $zip->getFromIndex($index); 
$content = str_replace($placeholders, $values, $content);
$zip->addFromString($contentFile, $content); 
} 
$zip->close(); 
}
}


function CreateDOCX4 () {
$file = 'D:\NewFile3.docx'; 
$copy = 'D:\NewFile4.docx'; 
copy($file, $copy);
$contentFile = "word/document.xml";
$zip = new ZipArchive; 

if ($zip->open($copy)) { 
if (($index = $zip->locateName($contentFile)) !== false) { 
//$col = array('name_of_discipline', );
$placeholders = array('resourse');
$values = array($_POST['resourse']);
$content = $zip->getFromIndex($index); 
$content = str_replace($placeholders, $values, $content);
$zip->addFromString($contentFile, $content); 
} 
$zip->close(); 
}
}
?>