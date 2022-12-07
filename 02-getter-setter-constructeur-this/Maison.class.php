<?php 
class Maison 
{
    public $couleur = "blanc";
    public static $espaceTerrain = "500 m²";
    private static $nbPieces = 7;

    const TVA = 20; 

    public static function getNbPieces()
    {
        return self::$nbPieces;
    }

    public function getNbPortes()
    {

    }

}

$object = new Maison;
echo "couleur : " . $object->couleur . "<br>";
echo "Terrain : " . Maison::$espaceTerrain . "<br>";
echo "nombre de pièces :" . Maison::getNbPieces() . "<br>";
echo "TVA :" . Maison::TVA . "<br>";


?>
