<?php
function autoload($class){
require_once(strtolower($class).'.php');
}
spl_autoload_register('autoload');
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<label><p>Login</p><input type="text" name="login"></label>
<label><p>Password</p><input type="password" name="password"></label>
<label><p>Confirm password</p><input type="password" name="cpassword"></label>
<label><p>Email</p><input type="email" name="email"></label>
<br/></br>
<input type="submit" name="submit" >


  <form>
