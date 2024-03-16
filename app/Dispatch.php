<?php

namespace App;
use Src\classes\ClassRoutes;

class Dispatch extends ClassRoutes{
private $metodo;
private $param = [];
private $obj;

public function __construct()
{
    self::addController();
}


private function addController(){
    $rotaController= $this->getRota();
    $namespace = "App\\Controller\\{$rotaController}";
    $this->obj = new $namespace;

    if (isset($this->parseUrl()[1])) 
        self::addParam();
    

}
public function setMetodo($metodo){
    $this->metodo = $metodo;
  
  }

 private function addParam(){  
    
    $contArray = count($this->parseUrl());
    if ($contArray > 2) {
       foreach($this->parseUrl() as key => $value){
         if ($key>1) {
            $this->setParam($this->param += [$key=> $value]);
         }
       }
    }
}


private function addMetodo(){
  if (method_exists($this->obj,$this->parseUrl()[1]){
    $this->setMetodo("{ $this->parseUrl()[1] }");
          self::addParam();
    call_user_func_array([$this->obj,$this->getMetodo()],$this->getParam()); 
  }
}

 



 function getMetodo(){
     return $this->metodo;

}

function setParam($param){
     $this->param = $param;

}

function getParam(){
    return $this->param;

}


}




?>