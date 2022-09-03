<?php
    session_start();
    define ('ROOT_PATH', realpath(dirname(__FILE__)));

    if($_SERVER['HTTP_HOST'] == "127.0.0.1" || $_SERVER['HTTP_HOST'] == "localhost"){
        // define('BASE_URL', 'http://localhost/server/fourtech/vooca/store/');
        define('BASE_URL', 'http://localhost/Attendance/');
        // changed base url
    }else{
        define('BASE_URL', 'http://fourtechglobalsolutions.com/voocan5/store/');
    }
    

?>
