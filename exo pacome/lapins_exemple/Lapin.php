<?php
abstract class Lapin
{
    protected $nom;
    protected $age;
    protected $sous_espece;
    protected $stock_carottes;
    protected $moMan = null;
    protected $poPa=null;

    public function __construct($nom,$age,$sous_espece,$stock_carottes=10){
        $this->nom = $nom;
        $this->age = $age;
        $this->sous_espece = $sous_espece;
        $this->stock_carottes = $stock_carottes;
    }
    public function manger($nombre=1){
        if($this->stock_carottes>=$nombre){
            $this->stock_carottes -= $nombre;
            return true;
        }
        return false;
    }
    public function peutFaireDesGosses(Lapin $autreLapin): bool{
        return $this !== $autreLapin
            && $this->sous_espece === $autreLapin->getSousEspece();
    }

    public abstract function faireDesGosses(Lapin $autreLapin) : array;

    public function getSousEspece(){
        return $this->sous_espece;
    }
}