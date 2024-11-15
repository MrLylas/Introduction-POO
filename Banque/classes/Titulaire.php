<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});     

class Titulaire{
    private string $nom;
    private string $prenom;
    private string $ville;
    private DateTime $birthDate;
    private int $bankAccount;

    private array $comptes;

    //Contructeur avec typage des paramètres 
    public function __construct(string $nom,string $prenom,string $ville,int $bankAccount){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birthDate = new dateTime($birthDate);
        $this->ville = $ville;
        $this->bankAccount = $bankAccount;
    }

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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of bankAccount
     */ 
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Set the value of bankAccount
     *
     * @return  self
     */ 
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    public function fullValue(): string
    {
        return "<div class='bibliographie'>
                    <p>".$this->nom." ".$this->prenom."<br>".$this->ville."<br>Compte(s) banquaire(s) : ".$this->bankAccount."</p><br>
                </div>";
    }
}
