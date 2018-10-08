<?php 
namespace controllers;

class ArtistController
{
    function __construct(){

    }

    function addArtist($nombre,$apellido){
        echo $name.' '.$apellido;
        include('views/index.php');
    }

    function index(){
        include("views/artistViews.php");
    }
}



?>