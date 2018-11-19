<?php
class Log
{
public function login($conneting,$data)
{    
$email=$data['email'];
$password=$data['password'];
$check_login="SELECT * FROM users WHERE email=:mail AND password=:pass";
$statement=$conneting->prepare($check_login);
$fen_array=array();
$saat_array=array();
$statement->execute(
  array(
      ':mail'=>$email,
      ':pass'=>$password
  )
);
$no_of=$statement->rowCount();
if($no_of>0)
{
    $gotur=$statement->fetch();
    $id=$gotur['id'];
    $check_login2="SELECT * FROM fenler WHERE profile=:id";
    $statement2=$conneting->prepare($check_login2);
    $statement2->execute(
  array(
      ':id'=>$id,
  )
);
    while($fenler=$statement2->fetch())
    {
        array_push($fen_array,$fenler['lesson_name']);
        array_push($saat_array,$fenler['saat']);
    }

    echo json_encode(array('Siz ok suz!!!',$gotur['name'],$gotur['surname'],$gotur['id'],$fen_array,$saat_array));
}
else
{
    echo json_encode(array('Sikdirin',null));
}
}
}
?>