<?php

class Compte{
    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle,int $solde,string $devise,Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addAccount($this);
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }
    
    /**
     * Get the value of devise
     */ 
    public function getDevise()
    {
        return $this->devise;
    }
    
    /**
     * Set the value of devise
     *
     * @return  self
     */ 
    public function setDevise($devise)
    {
        $this->devise = $devise;
        
        return $this;
    }
    
    /**
     * Get the value of titulaire
     */ 
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @return  self
     */ 
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }
    //convert to string
    public function __toString()
    {
        return "$this->libelle : $this->solde $this->devise";
    }
    //Add money
    public function addSolde(float $crediter){
        $this->solde += $crediter;
        echo "Ajout de $crediter €<br>";
    }
    //remove money 
    public function removeSolde(float $debiter){
        if ($debiter <=$this->solde){
            $this->solde -= $debiter;
            echo "Débité de $debiter";
        }else echo "Débit impossible";
    }
    //send money
    public function transfert(float $virement, Compte $bankAccount){
        if ($virement < $this->solde){
            $this->solde -= $virement;
            $bankAccount->addSolde($virement);
        }else{
            "Virement impossible";
        }
    }
    public function getInfosCompte()
    {
        return $this->getLibelle() . " " . $this->getSolde()." ".$this->getDevise()."<br><br>";
    }


}


