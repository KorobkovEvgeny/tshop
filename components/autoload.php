<?php

function myAutoload($class){
    $path = array('components','models');
    
    foreach ($path as $dir) {
        $classPath = ROOT.$dir.$class.'.php';
        if (is_file($classPath)){
            include_once ($classPath);
        }
    }
}
spl_autoload_register('myAutoload');
?>
