<?php
$config['debug'] = FALSE;
$config['namespaces']= array();
$config['db'] = array(
    'default1'=>array(
        'type'=>'mysql',
        'host'=>'127.0.0.1',
        'port'=>3306,
        'dbname'=>'root',
        'dbuser'=>'root',
        'dbpass'=>'root',
        'charset'=>'utf8',
    ),
	'default'=>array(
        'type'=>'mysql',
        'host'=>'rdsnrrmuzbmqvb3.mysql.rds.aliyuncs.com',
        'port'=>3306,
        'dbname'=>getenv("PTPHP_DB_NAME"),
        'dbuser'=>getenv("PTPHP_DB_USER"),
        'dbpass'=>getenv("PTPHP_DB_PASSWD"),
        'charset'=>'utf8',
    ),
);


$config['cache']["redis"] = array(
    'default'=>array(
        'host' => '127.0.0.1',
        'port' => 6379,
    )
);
$config['cache']["file"] = array(
    'default'=>array(
        'cache_dir' => PATH_PRO.'/tmp/filecache',
        'length'    => 3000,
    )
);

$config['cache']["ssdb"] = array(
    'default'=>array(
        'host' => '127.0.0.1',
        'port' => 8121,
    )
);


