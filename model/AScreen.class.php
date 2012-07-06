<?php
/**
 * © 2012 FlatTurtle bvba 
 * Author: Pieter Colpaert pieter aŧ flatturtle.com
 * License: AGPLv3
 */
class AScreen extends ModelBase{

    function on(){
        $this->sendMessage($this->hostname, "application.enableScreen(true);");
    }
    
    function off(){
        $this->sendMessage($this->hostname, "application.enableScreen(false);");
    }

    function reload(){
        $this->sendMessage($this->hostname, "location.reload(true);");
    }
}

