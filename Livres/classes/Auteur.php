<?php

class Auteur {
    //déclaration des variables 
    private string $nom;
    private string $prenom;

    public function __construct(string $prenom, string $nom){
        $this->nom = $nom;
        $this->prenom = $prenom;

    }
    //Get the value of nom
    
    public function getNom(): string
    {
        return $this->nom;
    }
    //Set value of nom
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    //Get the value of prenom

    public function getPrenom(): string
    {
        return $this->prenom;
    }
    //Set Value of prenom
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function fullName(){
        return $this->prenom." ".$this->nom;
    }
}
    


    
