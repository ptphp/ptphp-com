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
        var_dump(\Pt::$config);
        exit;
        $db = PtDb::init("default");
        var_dump($db);
        var_dump(\Pt::$config);
        $res = $db->getOne("select * from user");
        var_dump($res);
        echo phpinfo();
    }
}
