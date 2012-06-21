<?php
/**
 * © 2012 FlatTurtle bvba 
 * Author: Pieter Colpaert pieter aŧ flatturtle.com
 * License: AGPLv3
 */
class ScreenController extends AController{
    function GET($matches){
        //First let's check if you're logged in
        if($this->isAuthenticated()){
            $host = $matches[1];
            $args = explode("/",$matches[2]);
            $this->sendMessage($host,$args[0]);
        }else{
            echo "You're not authorized";
        }
    }

    function sendMessage($host,$msg){
        //echo "Executing";
        //echo "php sendxmpp.php \"$host@botnet.corp.flatturtle.com\" \"$msg\"";
        exec("php sendxmpp.php \"$host@botnet.corp.flatturtle.com\" \"$msg\"");
    }
        
    function isAuthenticated(){
        return true;
    }
}