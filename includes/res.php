<h1> ВОЙТИ НА САЙТ</h1><br/> 
<div id="formregister">
	</pre>
	<h5> АВТОРИЗАЦИЯ</h5><br/> 
	<?php if(!$_SESSION['auth']['user']): ?>
	<form action="#" method="post" >
	<table>
	<tbody>
	<tr>
	<td>Логин:</td>
	<td><input type="text" name="login"  value="<?=$_SESSION['reg']['login']?>" /></td>
	</tr>
	<tr>
	<td>Пароль:</td>
	<td><input type="password" name="pass" /></td>
	</tr>
	<tr>
	<td colspan="2"><input type="submit" name="auth" value="Войти" /></td>
	</tr>
	</tbody>
	</table>
	</form>
	<pre>
		<p><a href="?view=reg">Не зарегистрированы?</a></p>
		<?php
                    if(isset($_SESSION['auth']['error'])){
                        echo $_SESSION['auth']['error'];
                        unset($_SESSION['auth']);
                    }
                ?>
                <?php else: ?>
                <?php   $user = $_SESSION['auth']['user'];  ?>
                    <p>Добро пожаловать, <?= $user?></p>
                    <a href="?do=logout">Выход</a>

                <?php endif; ?>

  </div>

  