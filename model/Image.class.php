<?php
/**
 * © 2012 FlatTurtle bvba
 * Author: Nik Torfs
 * Licence: AGPLv3
 */
class Image extends ModelBase
{
    function add($post){
        $this->sendMessage("Image.add();");
    }

    function show($post){
        if(!isset($post['image_url'])){
            echo "";
        }
        $image_url = $post['image_url'];
        $this->sendMessage("$('.container').html('');$('.container').css({'background': 'black url(".$image_url.") center center no-repeat'}); setTimeout(function(){location.reload(true);},30000);");

        //$this->sendMessage("Image.show(".$image_url.");");
    }

    function remove($post){
        $this->sendMessage("Image.remove();");
    }
}
