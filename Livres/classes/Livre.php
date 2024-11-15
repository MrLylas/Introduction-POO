<?php

class Livre {

    private string $nom;
    private string $annee;
    private string $pages;
    private string $prix;
    private Auteur $auteur;
    

    // Constructeur avec typage des paramètres
    public function __construct(string $nom, string $annee, string $pages, float $prix, Auteur $auteur){
        $this->nom = $nom;
        $this->annee = $annee;
        $this->pages = $pages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
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
    
    
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }
    
    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        
        return $this;
    }
    public function __toString(){
        return $this->nom.$this->annee."<br>";
    }
}

