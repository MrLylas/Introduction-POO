<?php

class Contrat
{

    private Entreprise $entreprise;
    private Employe $employe;
    private DateTime $dateEmbauche;

    public function __construct( Entreprise $entreprise, Employe $employe, string $dateEmbauche)
    {
        $this -> entreprise = $entreprise;
        $this -> employe = $employe;
        $this -> dateEmbauche = new DateTime($dateEmbauche);
        $this -> entreprise-> addContrat($this);
        $this -> employe-> addContrat($this);
    }
    // getter et setter entreprise
    public function getentreprise() 
    {
        return $this->entreprise;
    }
    public function setentreprise ($entreprise)
    { 
        $this-> $entreprise = $entreprise;
        return $this;
    }
    // getter et setter employes
    public function getemployes()
    {
        return $this->employe;
    }
    public function setemployes ($employes)
    { 
        $this-> $employes = $employes;
        return $this;
    }
    // getter et setter dateEmbauche
    public function getdateEmbauches() 
    {
        return $this->dateEmbauche;
    }
    public function setdateEmbauche ($dateEmbauche)
    { 
        $this-> $dateEmbauche = $dateEmbauche;
        return $this;
    }

    public function getDateEmbauche ()
    {
        return $this-> dateEmbauche->format("d-m-Y");
        
    }


}


?>