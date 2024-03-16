<?php
header("content-type:text/html;charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");
include "../app/teste.php";
 //use App\Teste;

 //$teste = new Teste();

use Src\classes\ClassRoutes;
//use  Src\Traits\TraitUrlParse;

 /*class Teste {

 use TraitUrlParse;

 public function __construct()
 {
  
    $url = $this->parseUrl();
    var_dump($url);
 }

 
 
 }

 $Teste = new Teste();*/


 /*class Teste extends ClassRoutes{
 public function __construct()
 {
    $r = $this->getRota();
    var_dump($r);
 }


 }

 $Teste = new Teste();*/


 /*use App\Dispatch;
 $dispatch = new Dispatch();*/




 use App\Controller\ControllerHome;
 // $controller = new ControllerHome;


?>