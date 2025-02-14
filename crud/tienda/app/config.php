<?php

    define('APP', 'Mi tienda Online');

    // Parámetros de conexión
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'sistema_crud');



    // URL RELATIVA    
    define('BASEPATH', '');
    define('URL', 'http://'.$_SERVER['HTTP_HOST'] .  (BASEPATH ? BASEPATH : '/'));
    

    // URL ABSOLUTA
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', __DIR__.DS);

    define('ASSETS', URL.'assets'.DS);
    define('IMG', ASSETS.'img'.DS);
    define('CSS', ASSETS.'css'.DS);
    define('JS', ASSETS.'js'.DS);

    define('PAGES', URL.'pages'.DS);
    
    
     

    
    