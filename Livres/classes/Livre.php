<?php

class Livre {

    private string $nom;
    private string $annee;
    private string $pages;
    private string $prix;
    

    // Constructeur avec typage des paramètres
    public function __construct(string $nom, string $annee, string $pages, float $prix){
        $this->nom = $nom;
        $this->annee = $annee;
        $this->pages = $pages;
        $this->prix = $prix;
    }

    // Getter pour l'année
    public function getAnnee(): string
    {
        return $this->annee;
    }

    // Setter pour l'année
    public function setAnnee(string $annee): self
    {
        $this->annee = $annee;
        return $this;
    }

    // Getter pour les pages
    public function getPages(): string
    {
        return $this->pages;
    }

    // Setter pour les pages
    public function setPages(string $pages): self
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
    // Méthode pour obtenir la valeur complète
    public function fullValue(): string
    {
        return "<p class ='bouqins'><strong>".$this->nom."</strong>"." ".$this->annee." ".$this->pages." pages / ".$this->prix." €</p><br>";
    }

}

