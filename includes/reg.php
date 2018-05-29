<div id="formregister">
  </pre>
    <h5> РЕГИСТРАЦИЯ</h5><br/> 
<form action="#" method="post">
<table>
<tbody>
<tr>
<td>Имя:</td>
<td><input type="text" name="name" value="<?=$_SESSION['reg']['name']?>" /></td>
</tr>
<tr>
<td>Логин:</td>
<td><input type="text" name="login"  value="<?=$_SESSION['reg']['login']?>" /></td>
</tr>
<tr>
<td>Пароль:</td>
<td><input type="password" name="pass"  /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="reg" value="Зарегистрироваться!" /></td>
</tr>
</tbody>
</table>
</form>
<pre>
		

  </div>
	 <?php
    
    if(isset($_SESSION['reg']['res'])){
        echo '<div class="error">' .$_SESSION['reg']['res']. '</div>';
        unset($_SESSION['reg']);
    }
    
    ?>