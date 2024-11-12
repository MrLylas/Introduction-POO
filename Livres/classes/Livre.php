<?php

class Livres {
    //déclaration des variables 
    private string $bouquin;
    private string $annee;
    private string $pages;
    private float $prix;
    private Auteur $auteur;


    public function _construct(string $nom, string $annee, string $pages, float $prix, Auteur $auteur){
        $this->bouquin = $bouquin;
        $this->annee = $annee;
        $this->pages = $pages;
        $this->prix = $prix;
        $this->auteur = $auteur;
    }

    /**
     * Get the value of bouquin
     */ 
    public function getBouquin()
    {
        return $this->bouquin;
    }

    //Set the value of bouquin

    public function setBouquin($bouquin)
    {
        $this->bouquin = $bouquin;

        return $this;
    }
    
    //Get the value of annee

    public function getAnnee()
    {
        return $this->annee;
    }

    // Set the value of annee

    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }
    
    //Get the value of pages

    public function getPages()
    {
        return $this->pages;
    }

    // Set the value of pages

    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    //Get the value of prix

    public function getPrix()
    {
            return $this->prix;
    }

    //Set the value of prix

    public function setPrix($prix)
    {
            $this->prix = $prix;

            return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    // Set the value of auteur

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
}