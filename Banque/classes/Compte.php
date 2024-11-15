<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

class Compte{
    private string $libelle;
    private int $solde;
    private string $devise;
    private string $utilisateur;

    public function __construct(string $libelle,int $solde,string $devise,string $utilisateur){
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->utilisateur = $utilisateur;
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
     * Get the value of utilisateur
     */ 
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
    public function fullAccount(): string
    {
        return "<div class='account'>
                    <p>".$this->libelle."<br>".$this->solde." ".$this->devise."<br>Compte(s) banquaire(s) : ".$this->utilisateur."</p><br>
                </div>";
    }
}


