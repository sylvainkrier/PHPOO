<?php   
class Etudiant
{
    private $prenom;

    public function __construct($element)
    {
        echo "Instanciation de l'objet.";
        $this->setPrenom($element);
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($element)
    {
        $this->prenom = $element;
    }
}

$etudiant = new Etudiant("Iysha");
var_dump($etudiant);
?>