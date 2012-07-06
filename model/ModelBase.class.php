<?php
/**
 * © 2012 FlatTurtle bvba
 * Author: Nik Torfs
 * Licence: AGPLv3
 */
class ModelBase
{
    protected $hostname;

    function __construct($host){
        $this->hostname = $host;
    }

    protected function sendMessage($msg){
        //echo "Executing";
        //echo "php sendxmpp.php \"$this->hostname@botnet.corp.flatturtle.com\" \"$msg\"";
        //escape galore!
        $msg = $this->escape($msg);
        exec("php sendxmpp.php \"$this->hostname@botnet.corp.flatturtle.com\" \"$msg\"");
    }

    function escape($msg){
        $msg = str_replace("\"","\\\"", $msg);
        $msg = str_replace("$","\\$", $msg);
        $msg = str_replace("'","\\'",$msg);
        return $msg;
    }
}
