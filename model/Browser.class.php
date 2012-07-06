<?php
/**
 * © 2012 FlatTurtle bvba
 * Author: Nik Torfs
 * Licence: AGPLv3
 */
class Browser extends ModelBase
{
    function add($post){
        $this->sendMessage("Browser.add();");
    }

    function browseTo($post){
        if(!isset($post['url'])){
            echo "url not included in post";
            return;
        }

        $url = $post['url'];
        $this->sendMessage("window.location=\"".$url."\";");

        //$this->sendMessage("Browser.go(".$url.")");
    }

    function back($post){
        $this->sendMessage($this->hostname, "history.back();");
        //$this->sendMessage("Browser.back();");
    }

    function remove($post){
        $this->sendMessage("Browser.remove();");
    }
}
