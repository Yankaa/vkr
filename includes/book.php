
                    <div class="news_w">
                        <div class="news_desc">

<form name="form3" method="post" action="#">
                    <div class="form-group text required goal_text"><label class="text required" for="goal_text">
                        <ul>
                        <li>Основная литература:<abbr title="required">*</abbr> </li>
                        <br>
                            </ul>
                <TEXTAREA name="osnovnya" rows="10" cols="80"></TEXTAREA>

</div>

  <div class="form-group text required goal_text"><label class="text required" for="goal_text">
                        <br><br>
                        <ul>
                        <li>Дополнительная литература: <abbr title="required">*</abbr> </li>
                        <br>
                            </ul>
                
                <TEXTAREA name="dopolnit" rows="10" cols="80"></TEXTAREA> <br><br>
            
                        
                    </div>
 <li>Периодические издания: <abbr title="required">*</abbr> </li>
<input type="checkbox" name="period" value="При изучении данной дисциплины использование литературы не планируется" /> При изучении данной дисциплины использование литературы не планируется <br> <br>
                            </ul>
                
                <TEXTAREA name="period" rows="4" cols="80"> </TEXTAREA> <br><br>

  
<li> Информационные ресурсы: <abbr title="required">*</abbr> </li> <br>
<input type="checkbox"  name="inform[]" value="Научая электронная библиотек elabrary.ru" /> Научая электронная библиотек elabrary.ru <br>
<input type="checkbox" name="inform[]" value="ЭБС Арбуз" /> ЭБС Арбуз <br>
<input type="checkbox" name="inform[]" value="Интегрум " /> Интегрум <br>
<input type="checkbox" name="inform[]" value="ЭБС Лань" /> ЭБС Лань <br>
<input type="checkbox" name="inform[]" value="ЭБС Юрайт" /> ЭБС Юрайт <br> <br><br>
 


<input type="submit"  name="create2" value="Добавить" /> 
<?php echo $err ?>
</form>