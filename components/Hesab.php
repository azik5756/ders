<?php


class Hesab
{
    public function bal($conneting,$data)
    {    
        $id=$data['id'];
        $name=$data['name'];
        $check_login="SELECT * FROM fenler WHERE profile=:id AND lesson_name=:name";
        $statement=$conneting->prepare($check_login);
        $fen_array=array();
        $saat_array=array();
        $statement->execute(
        array(
            ':id'=>$id,
            ':name'=>$name
        )
        );
        $no_of=$statement->rowCount();
        if($no_of>0)
        {
            $gotur=$statement->fetch();
            echo json_encode(array('Siz ok suz!!!',$gotur['seminar'],$gotur['kollokvium'],$gotur['serbest'],$gotur['labar'],$gotur['qayib'],$gotur['saat']));
        }
    }
    public function hesabla($conneting,$data)
    {
        $id=$data['id'];
        $lesson=$data['lesson'];
        $seminar=$data['seminar'];
        $kol=$data['kollokvium'];
        $ser=$data['serbest'];
        $lab=$data['labar'];
        $qay=$data['qayiblar'];
        echo json_encode('Куку блядь');
        $conneting->query("UPDATE `fenler` SET seminar='$seminar',kollokvium='$kol',serbest='$ser',labar='$lab',qayib='$qay' WHERE profile='$id' AND lesson_name='$lesson'");
    }
}

?>