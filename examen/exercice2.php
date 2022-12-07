<?php 
class Moto  
{
    public $marque;
    public $modele;
    public static $nbInstances = 0;

    public function __construct($_marque, $_modele)
    {
        $this->marque = $_marque;
        $this->modele = $_modele;
        Moto::$nbInstances++;
    }
}

$moto1 = new Moto("Ducati","Monster");
$moto2 = new Moto("Honda","DTM");
$moto3 = new Moto("Triumph","One");

echo "Nombre d'instances : " . Moto::$nbInstances;
?>