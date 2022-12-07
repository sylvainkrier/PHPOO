<?php

class Membre
{
    private $pseudo;
    private $mdp;

    public function setPseudo ($element)
    {
        $nbCaracteresElement = iconv_strlen($element);
        
        if (!is_string($element)) 
        {
            $this->pseudo="ERREUR !!!";    
            echo "Donne moi une string pour ton pseudo bordel !!!<br>";
        }
        elseif ($nbCaracteresElement < 5 || $nbCaracteresElement > 15 ) 
        {
            $this->pseudo = "ERREUR !!!";
            echo "Donne moi une string entre 5 et 15 caractères bordel !!!<br>";
        }
        else $this->pseudo = $element; 
    }

    public function setMdp ($element)
    {
        if (!is_string($element)) 
        {
            $this->mdp = "ERREUR !!!";
            echo "Donne moi une string pour ton MDP bordel !!!<br>";
        }
        else $this->mdp = $element;
    }

    public function getPseudo ()
    {
        return $this->pseudo;
    }

    public function getMdp ()
    {
        return $this->mdp;   
    }
}

$membre = new Membre;
$membre->setPseudo("Coco Channel");
$membre->setMdp("12345");

echo "Mon compte est Nom : " . $membre->getPseudo() . ", Mdp = " . $membre->getMdp() . "<br><br>";

$membre->setPseudo(1221);
$membre->setMdp(12345);

echo "Mon compte est Nom : " . $membre->getPseudo() . ", Mdp = " . $membre->getMdp() . "<br><br>";

$membre->setPseudo("Coco Channel est la plus belle");
$membre->setMdp(12345);

echo "Mon compte est Nom : " . $membre->getPseudo() . ", Mdp = " . $membre->getMdp() . "<br><br>";

$membre->setPseudo("M");
$membre->setMdp(12345);

echo "Mon compte est Nom : " . $membre->getPseudo() . ", Mdp = " . $membre->getMdp() . "<br><br>";

echo "fin";

?>