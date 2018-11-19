<?php
class Hour
{
public function upd($conneting,$data)
{    
$id=$data['id'];
$lesson=$data['lesson'];
$hour=$data['hour'];
echo json_encode('Куку блядь');
$conneting->query("UPDATE `fenler` SET saat='$hour' WHERE profile='$id' AND lesson_name='$lesson'");
}
}
?>