<?php
/**
 * © 2012 FlatTurtle bvba
 * Author: Nik Torfs
 * Licence: AGPLv3
 */
class PluginController extends AController
{
    function POST($matches)
    {
        if(!$this->isAuthorized()){
            echo "You are not authorized!";
            return;
        }

        //will always be set otherwise the route wouldn't be matched
        $host = $matches['host'];
        $plugin = $matches['name'];
        $action = $matches['action'];

        $plugin = ucfirst($plugin);
        if(!class_exists($plugin))
            echo "The plugin: ".$plugin." does not exist!";

        $instance = new $plugin($host);

        if(!method_exists($instance, $action))
            echo "Action: ".$action." not supported";

        call_user_func_array(array($instance, $action), $_POST);
    }

    //TODO: make it secure!
    private function isAuthorized(){
        return true;
    }
}
