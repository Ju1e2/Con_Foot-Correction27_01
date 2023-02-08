<?php
namespace App\class;
use DateTime;

class But extends FaitDeJeu
{
    private bool $surpenalty;

    public function construct(string $auteur, Equipe $equipe,DateTime $temps,  bool $surpenalty)
    {
        parent::construct($auteur, $surpenalty, $temps, $equipe);
        $this->surpenalty = $surpenalty;
    }

    public function donneTexte(): string
    {
        $texte = "";
        if ($this->surpenalty == null) {
            $texte .= "But : " . $this->getTemps()->format("H:i:s") . " : " . $this->getAuteur()->getNom() . " " . $this->getAuteur()->getPrenom() . " Marque un but avec l'Equipe  : ". $this->getEquipe()->getEquipe();
        } else {
            $texte .= "But : " . $this->getTemps()->format("H:i:s") . " : " . $this->getAuteur()->getNom() . " " . $this->getAuteur()->getPrenom() . " Marque un penalty avec l'équipe  :". $this->getEquipe()->getEquipe();
        }
        return $texte;
    }

}