
<div id="wrap">
				<div id="news">
					<div id="news_head">Выбор дисципины</div>
					<div class="news_w">
						<div class="news_desc">
					
<?php require_once 'Classes/PHPExcel.php';
$Excel = PHPExcel_IOFactory::load('zxc.xls'); ?>

<?php foreach ($Excel->getWorksheetIterator() as $worksheet) {
    // выгружаем данные из объекта в массив
    $lists[] = $worksheet->toArray();
} ?>


<?php foreach($lists as $list){
 echo '<table border="1">';
 // Перебор строк
 foreach($list as $row){
   echo '<tr>'; 

   // Перебор столбцов
   foreach($row as $col)   {
     echo '<td>' .$col.'</td>'; 
 }  
 echo '</tr>';
 }
 echo '</table>';

}?>
<form name="form1" method="post" action="#">
<input type="submit"  name="create" value="Создать" /> 
</form>
					</div>
					</div>
				</div>
			</div>
		</div>


