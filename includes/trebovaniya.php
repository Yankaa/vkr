
			<div id="wrap">
				<div id="news">
					<div id="news_head">Обо мне</div>
					<div class="news_w">
						<div class="news_desc">
						<span>
							<p>

<br><br> 
<?php require_once 'Classes/PHPExcel.php';
$Excel = PHPExcel_IOFactory::load('zxc1.xlsx');  ?>

	<?php foreach ($Excel->getWorksheetIterator() as $worksheet) {
    // выгружаем данные из объекта в массив
    $lists[] = $worksheet->toArray();
} ?>





<?php foreach($lists as $list)?>
<TEXTAREA name="period" rows="4" cols="80"> 
<?php {
 echo '<table border="1">';
 // Перебор строк
 foreach($list as $row){
   echo '<tr>'  ; 

   // Перебор столбцов
   foreach($row as $col)   {
     echo '<td>' .$col.'</td>'; 
 }  
 echo '</tr>';
 }
 echo '</table>';
}
?> </TEXTAREA> <br><br>
<TEXTAREA name="period" rows="4" cols="80"> </TEXTAREA> <br><br>
<form name="form1" method="post" action="#">
<input type="submit"  name="create" value="Создать" /> 
</form>





							</p>		
						</span>	
					</div>
					</div>
				</div>
			</div>
		</div>