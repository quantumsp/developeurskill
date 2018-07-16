
<?php
class Reg extends User{
public $confirm_password;
private $err = [];

public function__construct($login,$password,$confirm_password,$email){
$this->login = $login;
$this->password = $password;
$this->confirm_password = $confirm_password;
$this->email = $email;
$this->date = date('d.m.y');
}
public function regex($pattern,$fild,$err){
  preg_match($pattern,$fild)?:$this->err[] = $err;
}

public function len($min,$max,$variable,$err){
  !(strlen($variable>$max || strlen($variable) < $min)? : this->err[]=$err;
  }
public function qulity($one,$two,$err){
  $one == $two?:$this->err[]=$err;
}
public function unique(array $row,$err){
  array_shift($row)==0?:$this->err[]=$err;
}
  public function getErrors(){
    return $this->err;
  }
public function generateSalt($int){
$chars='qwertyuiopasdfghjklzxcvbnm0123456789QWERTYUIOPASDFGHJKLZXCVBNMX<>?,.:;][)(-+=]';
$size=strlen($chars)-1;
$salt='';
while($int--){
  $salt.=$chars[rand(0,$size)];
}
return $salt;
}
public function generateHash($algo=PASSWORD_DEFAULT, $array $options=null){
!is_null($option)?:$options=[
'salt'=>$this->generateSalt(22),
'cost'=>10;
];
$this->password = password_hash($this->password,$algo,$options); 
}
?>
