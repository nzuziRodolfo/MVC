<?php
$pastainterna = "mvc/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastainterna}");
if (substr($_SERVER['DOCUMENT_ROOT'],-1) =='/') {
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$pastainterna}");
    # code...
} else {
    # code...
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$pastainterna}");
}
#diretorio especificos
define('DIRIMG',DIRPAGE."public/img");
define('DIRCSS',DIRPAGE."public/css");
define('DIRJS',DIRPAGE."public/js");
#Acesso ao banco de dados
define('HOST',"LOCALHOST");
define('DB',"ipvx");
define('USER',"root");
define('PASSWORD',"");

?>