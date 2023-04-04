<?php
require_once 'Lapin.php';

class LapinExotique extends Lapin
{

    private $couleur;

    public function __construct($nom,$age,$stock_carottes=22){
        parent::__construct($nom,$age,'exotique',$stock_carottes);

        $couleurs = ['rouge', 'vert', 'bleu'];
        $this->couleur = $couleurs[rand(0, count($couleurs) -1)];
    }

     public function peutFaireDesGosses(Lapin $autreLapin): bool
     {
         return parent::peutFaireDesGosses($autreLapin) && $this->couleur == $autreLapin->getCouleur();
     }

    public function faireDesGosses(Lapin $autreLapin): array
    {
        $gosses = [];
        if($this->peutFaireDesGosses($autreLapin)){
            $nb = rand(5,12);
            for($i = 0; $i < $nb ;$i++){
                $gosse = new LapinExotique('a la con', 0, 0);
                $gosse->moMan = $this;
                $gosse->poPa = $autreLapin;

                $gosses[] = $gosse;
            }
        }
        return $gosses;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }
}