<?php
/*
 *  Точка входа
 */
define('MVC', TRUE);

require_once('config/config.php');























































































require_once CONTROLLER;

require_once 'Classes/PHPExcel.php';
$Excel = new PHPExcel();
$Excel->setActiveSheetIndex(0);
$sheet = $Excel->getActiveSheet();

require_once 'Classes/PHPExcel.php';
$Excel = PHPExcel_IOFactory::load('zxc.xls');

/*foreach ($Excel->getWorksheetIterator() as $worksheet) {
    // выгружаем данные из объекта в массив
    $lists[] = $worksheet->toArray();

}
 
foreach($lists as $list){
 echo '<table border="2">';
 // Перебор строк
 foreach($list as $row){
   echo '<tr>';
   // Перебор столбцов
   foreach($row as $col){
     echo '<td>'.$col.'</td>';
 }
 echo '</tr>';
 }
 echo '</table>';
}*/

/*require_once 'Classes/PHPExcel.php';
$excel = new PHPExcel();
$excel = PHPExcel_IOFactory::load('zxc.xls'); // подключить Excel-файл
$excel->setActiveSheetIndex(0); // получить данные из указанного листа

$sheet = $excel->getActiveSheet();*/

// формирование html-кода с данными
/*$html = '<table>';
foreach ($sheet->getRowIterator() as $row) {
    $html .= '<tr>';
    $cellIterator = $row->getCellIterator();
    foreach ($cellIterator as $cell) {

        // значение текущей ячейки
        //$cell = $sheet->getCell('A1');
        //$cell = $sheet->getCellByColumnAndRow(0, 3);

      
        $html .= '<td>'.$value.'</td>';
    }
    $html .= '<tr>';
}
$html .= '</table>';

// вывод данных
echo $cell->getValue();
?>*/
