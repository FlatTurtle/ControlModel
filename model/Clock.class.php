<?php
/**
 * © 2012 FlatTurtle bvba
 * Author: Nik Torfs
 * Licence: AGPLv3
 */
class Clock extends ModelBase
{
    function add($post){
        echo "added clock";
        $time = true;
        if(!isset($post['time']))
            $time = false;

        $date = true;
        if(!isset($post['date']))
            $date = false;

        $this->sendMessage("Clock.add();");
    }

    function remove($post){
        $this->sendMessage("Clock.remove();");
    }
}
