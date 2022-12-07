<?php 
class Voiture 
{
    private $litresEssence = 0;
    const CAPACITE_RESERVOIR = 50;

    
    
    public function setLitreEssence($nbLitres)
    {
        if (is_integer($nbLitres)) 
        {
            $this->litresEssence = $this->litresEssence + $nbLitres;
        }
    }
    public function getLitreEssence()
    {
        return $this->litresEssence;
    }
}

class Pompe 
{
    private $litresEssence = 0;

    public function setPompeLitreEssence($nbLitres)
    {
        if (is_integer($nbLitres)) $this->litresEssence = $nbLitres;
    }

    public function donnerEssence(Voiture $voiture, $nbLitres)
    {
        if(($nbLitres + $voiture->getLitreEssence()) >= voiture::CAPACITE_RESERVOIR) 
        {    
            echo "CA DEBOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOORDE !!!!<hr>";
            $nbLitresReellementFournis = voiture::CAPACITE_RESERVOIR - $voiture->getLitreEssence();
            echo "Je peux remplir que $nbLitresReellementFournis litres<hr>";
        }
        else
            $nbLitresReellementFournis = $voiture->getLitreEssence();
        
        $voiture->setLitreEssence($nbLitresReellementFournis); 
        
        $this->litresEssence = $this->litresEssence - $nbLitresReellementFournis;
    }

    public function getPompeLitreEssence()
    {
        return $this->litresEssence;
    }
}

$voiture = new Voiture();
$voiture->setLitreEssence(30);

echo "Nbre de litres dans la voiture : " . $voiture->getLitreEssence() . "<hr>";

for ($i=0;$i<=$voiture->getLitreEssence()-1;$i++)
{
    echo "X";
}

echo "<hr>";

$pompe = new Pompe();
$pompe->setPompeLitreEssence(800);
echo "Nbre de litres dans la pompe à essence : " . $pompe->getPompeLitreEssence() . "<hr>";

$pompe->donnerEssence($voiture,10);

echo "Nbre de litres dans la voiture : " . $voiture->getLitreEssence() . "<hr>";
echo "Nbre de litres dans la pompe à essence : " . $pompe->getPompeLitreEssence() . "<hr>";
?>