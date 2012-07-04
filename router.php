<?php
/**
 * This file is the router. It's where all calls come in. It will accept a request en refer it to the right Controller
 *
 * @copyright (C) 2011 by iRail vzw/asbl
 * @license AGPLv3
 * @author Pieter Colpaert
 * @author Jan Vansteenlandt
 */
include_once('includes/glue.php');
include_once('includes/rb.php');
include_once('tools/Cache.class.php');
include_once('controllers/AController.class.php');
include_once('tools/Exceptions.php');
include_once('tools/ErrorHandler.class.php');
include_once('tools/HTTP.class.php'); 
include_once('Config.class.php');
// Time is always in UTC
date_default_timezone_set('UTC');
// Initialize the ORM with the right credentials
//R::setup(Config::$DB,Config::$DB_USER,Config::$DB_PASSWORD);

//When do class could not be found, try to autoload in root
function __autoload($class){
    if(file_exists($class . ".class.php")){
        include_once($class . ".class.php");
    }else if(file_exists("controllers/" . $class . ".class.php")){
        include_once("controllers/" . $class . ".class.php");
    }
}

//map urls to a controller
$urls = array(
    "/" => "Index",
    "/touch/([^/]+)/?" => "GUIController",
    "/screen/([^/]*?)/(.*)" => "ScreenController",
    "(.*)" => "AController" 
);

//This function will do the magic. See includes/glue.php
try {
    glue::stick($urls);
} 
catch(Exception $e){
    ErrorHandler::logException($e);
}


