<?php
namespace Src\classes;

use Src\Traits\TraitUrlParse;

class ClassRoutes{

 use TraitUrlParse;
 private $rota;

 public function getRota(){

    $url = $this->parseUrl();
    $i = $url[0];
    $this->rota = array(
        ""=> "ControllerHome",
        "home" => "ControllerHome",
        "sitemap"=> "ControllerSiteMap"

    );

    if (array_key_exists($i,$this->rota)) {
        # code...
      echo DIRREQ."<br>";
         if (file_exists(DIRREQ."app/controller/{$this->rota[$i]}.php")) {
            return $this->rota[$i];
            # code...
         }
         else{

            return "Controller404";
         }


    } else {
        # code...
        return "ControllerHome";
    }



 }




}




?>