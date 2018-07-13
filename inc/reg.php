<?php
function autoload($class){
require_once(strtolower($class).'.php');
}
spl_autoload_register('autoload');


?>
