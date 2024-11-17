<?php  

class Titulaire{
    private string $nom;
    private string $prenom;
    private DateTime $birthDate;
    private string $ville;
    private array $bankAccount;

    //Contructeur avec typage des paramètres 
    public function __construct(string $nom,string $prenom,string $birthDate,string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birthDate = new dateTime($birthDate);
        $this->ville = $ville;   
        $this->bankAccount = [];
    }

    /**
     * Get the value of nom
     */ 
    public function getNom():string
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
    public function getPrenom():string
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
    public function getVille():string
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
    /**
     * Get the value of birthDate
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate(DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }
    //Calc age guest
    public function calcAge()
    {
        $now = new DateTime();
        $interval = $this->birthDate->diff($now);
        $age = $interval->format("%Y");
        return $age;

    }
    //Add account
    public function addAccount(Compte $bankAccount){
        $this->bankAccount[] = $bankAccount;
    }
    //convert user info to string  
    public function __toString(){
        return "$this->nom $this->prenom | " . $this->calcAge() . " ans | $this->ville ";
    }
    //User informations
    public function getInfosTitulaire()
    {
        echo $this;
        foreach($this->bankAccount as $account){
            echo "<br>".$account;

        }
        echo "<br><br>";
    }

}
