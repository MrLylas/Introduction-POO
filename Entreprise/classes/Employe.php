<?php

class Employe 
{
    private string $prenom;
    private string $nom;
    private string $email;
    private array $contrats;

    public function __construct(string $prenom,string $nom, string $email)
    {
        $this ->prenom = $prenom;
        $this -> nom= $nom;
        $this -> email= $email;
        $this -> contrats = [];
    }

    // getter et setter nom
    public function getnom() :string
    {
        return $this->nom;
    }
    public function setnom ($nom)
    { 
        $this->nom = $nom;
        return $this;
    }

    // getter et setter prenom
    public function getprenom() :string
    {
        return $this->prenom;
    }
    public function setprenom (string $prenom)
    { 
        $this->prenom = $prenom;
        return $this;
    }

    // getter et setter email
    public function getemail() :string
    {
        return $this->email;
    }
    public function setemail (string $email)
    { 
        $this->email = $email;
        return $this;
    }
    // getter et setter contrats
    public function getcontrats() 
    {
        return $this->contrats;
    }
    public function setville ($contrats)
    { 
        $this-> $contrats = $contrats;
    }
    public function addContrat(Contrat $contrat)
    {
        $this -> contrats[] = $contrat;
    }

    public function afficherEntreprise()
    {
        $result = "<h3>Entreprise de $this </h3>";
        foreach($this->contrats as $contrat)
        {
            $result .= $contrat->getEntreprise()."(". $contrat->getDateEmbauche().")<br>";
        }
        return $result;
    }




    public function __toString()
    {
        return $this->prenom." ". $this->nom." ";
    }
}
?>