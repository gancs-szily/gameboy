<?php
require_once("gameRestKezelo.php");

$view = "";
if(isset($_GET["view"]))
    $view=$_GET["view"];


switch($view){
    case "all":
       
        $gameRest = new GamesRestKezelo();
        $gameRest->getAllGames();
        break;
   
    case "single":
        $gameRest = new GamesRestKezelo();
        $gameRest->getGamesById($_GET["id"]);
        break;

    case "tipus":
        $gameRest = new GamesRestKezelo();
        $gameRest->getGamesByType($_GET["tipus"]);
        break;
   
    default:
        $gameRest = new GamesRestKezelo();
        $gameRest->GetFault();
        break;
   
}