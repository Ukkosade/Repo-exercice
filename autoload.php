<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 08/11/2018
 * Time: 16:26
 */

function autoLoad ($classe)
{
    if(file_exists($file="Model/".$classe.".php"))
    {
        include "$file";
    }
}
spl_autoload_register("autoLoad");