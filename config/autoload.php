<?php namespace config;
 class Autoload
{
	public static function Start ()
	{
        spl_autoload_register(function($instancia)
        {
  
            //$ruta=ROOT.str_replace("\\","/",$instancia).".php";
            $ruta2 = strtolower($instancia);
            $ruta = str_replace("\\","/",$ruta2).".php";
            include_once($ruta);
        });
     }
 }
 ?>