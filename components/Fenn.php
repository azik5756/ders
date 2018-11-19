<?php
class Lesson
{
public function add($conneting,$data)
{    
$id=$data['id'];
$lesson=$data['lesson'];

echo json_encode('Куку блядь');
$conneting->query("INSERT INTO `fenler` (profile,lesson_name) VALUES('$id','$lesson')");
}
}
?>