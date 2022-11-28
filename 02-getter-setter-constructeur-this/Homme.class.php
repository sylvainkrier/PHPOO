<?php
class Homme
{
    private $prenom;
    private $nom;

    public function setPrenom($element)
    {
        if (is_string($element)) $this->prenom = $element; else throw new UnexpectedValueException("C'est quoi c'te valeur ????");
    }
    
    public function setNom($element)
    {
        if (is_string($element)) $this->nom = $element; else throw new UnexpectedValueException("C'est quoi c'te valeur ????");;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    
    public function getNom()
    {
        return $this->nom;
    }

}

$homme = new Homme();
$homme->setPrenom("Sylvanius");
$homme->setNom("Krierus");
echo "Bonjour, je m'appelle " . $homme->getPrenom() . " " . $homme->getNom() . " !<br>";

//var_dump($homme);

?>