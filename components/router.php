<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of router
 *
 * @author Evgenii
 */
class router {
    
    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include ($routesPath);
    }
    
    private function getURI(){
        
        if(!empty($_SERVER['REQUEST_URI'])){
            return rtrim($_SERVER['REQUEST_URI'], '/');
        }
        
    }
}
