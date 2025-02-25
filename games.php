<?php
require_once "dbvezerlo.php";

class Games{
    private $games=[];

    public function __construct(){
        $query="SELECT 'g_ID', name, pic FROM games";
        $dbvez=new DBvezerlo();
        $this->games=$dbvez->executeSelectQuery($query);
    }

    public function getAllGames(){
        return $this->games;
    }

    public function getGamesById($gameid){
        $query="SELECT g_ID,name,pic FROM games
                WHERE g_ID=$gameid";
        $dbvez=new DBvezerlo();
        $this->games=$dbvez->executeSelectQuery($query);
        $dbvez->closeDB();
        return $this->games;
    }

    public function getGamesByType($typename){
        $query="SELECT g_ID,name,pic FROM games
                INNER JOIN type on games.type_iD=type.t_ID
                WHERE type.name='".$typename."'";
        $dbvez=new DBvezerlo();
        $this->games=$dbvez->executeSelectQuery($query);
        $dbvez->closeDB();
        return $this->games;

    }
}