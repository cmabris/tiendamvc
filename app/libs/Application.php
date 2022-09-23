<?php

/**
 * La clase Application maneja la URL y lanza los procesos
 */

class Application
{
    function __construct()
    {
        $db = Mysqldb::getInstance()->getDatabase();

        print 'Bienvenido a mi tienda virtual';
    }
}