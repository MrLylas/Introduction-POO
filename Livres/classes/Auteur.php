<?php

class Auteur {
    //déclaration des variables 
    private string $name;
    private string $prenom;
    private array $livres;

    public function __construct(string $prenom, string $name){
        $this->name = $name;
        $this->prenom = $prenom;
        $this->livres =[];

    }
    //Get the value of nom
    
    public function getName(): string
    {
        return $this->name;
    }
    //Set value of nom
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
    //Get the value of prenom

    public function getPrenom(): string
    {
        return $this->prenom;
    }
    //Set Value of prenom
    public function setPrenom($prenom):self
    {
        $this->prenom = $prenom;

        return $this;
    }
    //Get Full Name 

    public function fullName(){
        return $this->prenom." ".$this->nom;
    }
}
    


    
