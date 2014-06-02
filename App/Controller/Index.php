<?php
namespace Controller\Index;
use Lib\PtDb as PtDb;

class Index{
    function get(){
        echo "under construction";
    }
}

class Test111111{
    function get(){
        var_dump(\Pt::$config);
        exit;
        $db = PtDb::init("default");
        $res = $db->getOne("select * from user");
        var_dump($res);

    }
}
