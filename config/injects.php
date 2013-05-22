<?php

return array(
    'serviceDb'     =>  array('TE\Db\Connector',
        array(
            'PdoMysql',
            array(
                'mysql:dbname=test;host=localhost;port=3306',
                'root',
                '',
                array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                )
            )
        )
    ),

    'peopleService' =>  array('Example\Service\Db\People')
);
