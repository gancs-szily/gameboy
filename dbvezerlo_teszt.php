<?php
require_once "dbvezerlo.php";

class DbVezerloManual_teszt{
    public function runTest (){
        echo "Teszt indítása...  \n";

        $db = new DBvezerlo();
        if($this->testConn($db)){
            echo "kapcs sikeres";
        }else{
            echo "sikertelen kapcsolódás";
        }
    }

    private function testConn($db){
        $reflection=new ReflectionClass($db); //beépített ozstály
        $property=$reflection->getProperty('conn');
        $property->setAccessible(true);
        return !is_null($property->getValue($db));
    }
}

$test=new DbVezerloManual_teszt();
$test->runTest();