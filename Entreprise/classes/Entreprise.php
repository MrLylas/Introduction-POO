<?php

class Entreprise 
{
    //déclaration des variables
    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $codePostale;
    private string $ville;
    private array $contrats;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse,
     string $codePostale, string $ville)
    {
        $this -> raisonSociale = $raisonSociale;
        $this -> dateCreation = new DateTime($dateCreation);
        $this -> adresse = $adresse;
        $this -> codePostale = $codePostale;
        $this -> ville = $ville;
        $this -> contrats = [];
        
    }
    // getter et setter raisonSociale
    public function getRaisonSociale() : string // permet de donner un string en resultat
    {
        return $this->raisonSociale;
    }
    public function setRaisonSociale (string $raisonSociale)
    { 
        $this-> $raisonSociale = $raisonSociale;
    }
    // getter et setter dateCreation
    public function getdateCreation() 
    {
        return $this->dateCreation;
    }
    public function setdateCreation (string $dateCreation)
    { 
        $this-> $dateCreation = $dateCreation;
    }
    // getter et setter adresse
    public function getadresse() 
    {
        return $this->adresse;
    }
    public function setadresse (string $adresse)
    { 
        $this-> $adresse = $adresse;
    }
    // getter et setter codePostale
    public function getcodePostale() : string
    {
        return $this->codePostale;
    }
    public function setcodePostale (string $codePostale)
    { 
        $this-> $codePostale = $codePostale;
    }
    // getter et setter ville
    public function getville() : string
    {
        return $this->ville;
    }
    public function setville (string $ville)
    { 
        $this-> $ville = $ville;
    }
    // getter et setter contrats
    public function getcontrats() 
    {
        return $this->contrats;
    }
    public function setcontrats ($contrats)
    { 
        $this-> $contrats = $contrats;
    }


    public function getAdresseComplete()
    {
        return $this->adresse.", ". $this->codePostale.", ". $this->ville;
    }

    public function getInfos()
    {
        return $this->getRaisonSociale()." a ete crée le ".$this->getdateCreation()->format("d M Y")." et se situe à l'adresse suivante ".$this->getadresseComplete().".<br>";
    }

    public function addContrat(Contrat $contrat)
    {
        $this -> contrats[] = $contrat;
    }
    public function afficherEmployer()
    {
        $result = "<h3>Employe de $this </h3>";
        foreach($this->contrats as $contrat)
        {
            $result .= $contrat->getEmployes()."(". $contrat->getDateEmbauche().")<br>";
        }
        return $result;
    }
  
    public function __toString()
    {
        return $this->raisonSociale." ";
    }


}




?>