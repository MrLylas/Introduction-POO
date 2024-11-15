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

    public function fullName():string
    {
        return $this->prenom." ".$this->name;
    }

    //Result

    public function afficherBibliographie(){
        echo "<h2 class ='ecrivain'>Livres de ".$this->fullName()."</h2><br><br>";
        foreach($this->livres as $book){ 
              echo "<div class='bibliographie'>
                    <p class ='bouqins'>". $book->getNom()." (".$book->getAnnee().") : ".$book->getPages()." pages / ".$book->getPrix()."€ <br>
                    </div>";
        }
    }
    //ajouter un livre
    public function addLivre(Livre $livre){
        $this->livres[] = $livre;
    }
    public function __toString(){
        return $this->Prenom." ".$this->nom;
    }
    
}

    

















