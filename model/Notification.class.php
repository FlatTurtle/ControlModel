<?php
/**
 * © 2012 FlatTurtle bvba
 * Author: Nik Torfs
 * Licence: AGPLv3
 */
class Notification extends ModelBase
{
    function add($post){
        $this->sendMessage("Notification.add();");
    }

    function show($post){
        if(!isset($post['message'])){
            echo "no message given";
            return;
        }
        $message = $post['message'];

        $this->sendMessage("$(main).html('<p id=\"koffie\" class=\"color\">".$message."</p><style>#koffie{ color: white; font-size: 80px; text-align: center; border-top: 400px solid white;}</style>'); setTimeout(function(){location.reload(true);},30000);");
        //$this->sendMessage("Notification.show(".$message.");");
    }

    function remove($post){
        $this->sendMessage("Notification.remove();");
    }
}
