<?php
namespace Controller\Index;
use Lib\PtDb as PtDb;

class Index{
    function get(){
        echo "under construction";
    }
}

class Test{
    function get(){
        $db = PtDb::init("default");
        $res = $db->getOne("select * from user");
        var_dump($res);

    }
}
