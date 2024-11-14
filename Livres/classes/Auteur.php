<?php

class Auteur {
    //déclaration des variables 
    private string $name;
    private string $prenom;

    public function __construct(string $prenom, string $name){
        $this->name = $name;
        $this->prenom = $prenom;

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

    public function fullName():string
    {
        return "<h2 class ='ecrivain'>Livres de ".$this->prenom." ".$this->name."</h2><br>";
    }
}
    


    

















