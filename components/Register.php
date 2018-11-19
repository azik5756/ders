<?php
class Register
{
public function registration($conneting,$data)
{    
$name=$data['name'];
$surname=$data['surname'];
$email=$data['email'];
$password=$data['password'];
$check_login="SELECT * FROM `users` WHERE email=:mail";
$statement=$conneting->prepare($check_login);
$statement->execute(
  array(
      ':mail'=>$email,
  )
);
$no_of=$statement->rowCount();
if($no_of>0)
{
    echo json_encode('Basqa email isledin!!!');
}
else
{
    echo json_encode('Siz qeydiyatdan kecdiz!!!');
    $conneting->query("INSERT INTO `users` (name,surname,email,password) VALUES('$name','$surname','$email','$password')");
}
}
}
?>