<?php
    if ($_SERVER["SERVER_NAME"] == "local.restapi.com"){
        define("DB_HOST", "localhost");
        define("DB_USER", "root");
        define("DB_PASSWORD", "");
        define("DB_NAME", "privesportsnewdb" );	
    }else{
        define("DB_HOST", "localhost");
        define("DB_USER", "root");
        define("DB_PASSWORD", "");
        define("DB_NAME", "privesportsnewdb" );	
    }

?>