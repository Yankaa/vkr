
<?php require_once 'Classes/PHPExcel.php';
$Excel = PHPExcel_IOFactory::load('zxc2.xlsx'); 




foreach ($Excel->getWorksheetIterator() as $worksheet) {
    $worksheetTitle     = $worksheet->getTitle();
    $highestRow         = $worksheet->getHighestRow();
    $highestColumn      = $worksheet->getHighestColumn(); 
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
    $nrColumns = ord($highestColumn) - 64;
    echo '<h2>Лист «'.$worksheetTitle.'» ';
    echo $nrColumns . ' колонок (A-' . $highestColumn . ') ';
    echo ' и ' . $highestRow . ' строк.</h2>';
    echo '<table border="1">';
    // Цикл по строкам
    for ($row = 1; $row <= $highestRow; $row++) {
        echo '<tr>';
        // Цикл по колонкам
        for ($col = 0; $col < $highestColumnIndex; $col++) {
            $cell = $worksheet->getCellByColumnAndRow($col, $row);
            echo '<td>'.$cell->getValue().'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
} ?>


<TEXTAREA name="period" rows="10" cols="80"> 
  <?php 
$Excel = PHPExcel_IOFactory::load('zxc4.xlsx'); 

foreach ($Excel->getWorksheetIterator() as $worksheet) {
    $worksheetTitle     = $worksheet->getTitle();
    $highestRow         = $worksheet->getHighestRow(0);// например, 10
    $highestColumn      = $worksheet->getHighestColumn(); // например, 'E'
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
    $nrColumns = ord($highestColumn) - 64;

 for ($row = 1; $row <= $highestRow; $row++) {
   
     
          for ($col = 0; $col < $highestColumnIndex; $col++) 
          {
            $cell = $worksheet->getCellByColumnAndRow($col, $row);
            echo $cell->getValue();
        }
       
    }
 
}


?>

</TEXTAREA> <br><br>


<TEXTAREA name="period" rows="10" cols="80"> 
<?php 

$Excel->setActiveSheetIndex(); // получить данные из указанного листа

$sheet = $Excel->getActiveSheet();



// формирование html-кода с данными
$html = '<table>';
foreach ($sheet->getRowIterator() as $row) {
    $html .= '<tr>';
    $cellIterator = $row->getCellIterator();
    foreach ($cellIterator as $cell) {

        // значение текущей ячейки
        $cell = $sheet->getCell(); // 1-ый способ

        $html .= '<td>'.$value.'</td>';
    }

    $html .= '<tr>';
}
$html .= '</table>';

// вывод данных
echo $cell->getValue();



?>

</TEXTAREA> <br><br>





