<?php
/**
 * autoload pour charger toutes les classes automatiquement
 */

function autoLoad ($classe)
{
    if(file_exists($file="Model/".$classe.".php"))
    {
        include "$file";
    }
}
spl_autoload_register("autoLoad");