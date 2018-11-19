<?php

define('ROOT',dirname(__FILE__));
require(ROOT.'/config/Db.php');
require(ROOT.'/components/Register.php');
require(ROOT.'/components/Log.php');
require(ROOT.'/components/Fenn.php');
require(ROOT.'/components/Ders.php');
require(ROOT.'/components/Hesab.php');

$conneting=Db::getconn();
$json = file_get_contents("php://input");
$data = json_decode($json, true);
$type=$data['func'];
if($type=='reg')
{
    Register::registration($conneting,$data);
}
else if($type=='log')
{
    Log::login($conneting,$data);
}
else if($type=='lesson')
{
    Lesson::add($conneting,$data);
}
else if($type=='hour')
{
    Hour::upd($conneting,$data);
}
else if($type=='urok')
{
    Hesab::bal($conneting,$data);
}
else if($type=='change')
{
    Hesab::hesabla($conneting,$data);
}
?>