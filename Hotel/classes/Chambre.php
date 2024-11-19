<?php

class Chambre{
    private string $numero; 
    private float $prix;
    private int $bedNb;
    private bool $wifi;
    private bool $etat = false;
    private Hotel $hotel;
    private array $reservations;

    public function __construct(string $numero,float $prix,int $bedNb,bool $wifi,bool $etat, Hotel $hotel){
        $this->numero = $numero;
        $this->prix = $prix;
        $this->bedNb = $bedNb;
        $this->wifi = $wifi;
        $this->etat= $etat;
        $this->hotel = $hotel;
        $this->hotel->addChambre($this);

    }
    

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of bedNb
     */ 
    public function getBedNb()
    {
        return $this->bedNb;
    }

    /**
     * Set the value of bedNb
     *
     * @return  self
     */ 
    public function setBedNb($bedNb)
    {
        $this->bedNb = $bedNb;

        return $this;
    }

    /**
     * Get the value of wifi
     */ 
    public function getWifi():bool
    {
        return $this->wifi;
    }

    /**
     * Set the value of wifi
     *
     * @return  self
     */ 
    public function setWifi(bool $wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get the value of hotel
     */ 
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set the value of hotel
     *
     * @return  self
     */ 
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Get the value of reservations
     */ 
    public function getReservations()
    {
        return $this->reservations;
    }
    
    /**
     * Set the value of reservations
     *
     * @return  self
     */ 
    public function setReservations($reservations)
    {
        $this->reservations = $reservations;
        
        return $this;
    }
    
    
    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }
    
    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat(bool $etat)
    {
        $this->etat = $etat;
        
        return $this;
    }

    //ajouter une reservation :

    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
        
    }

    //retourner numero de chambre :
    
    public function afficherNumero(){
        return "<span class='infochambre'>Chambre n° $this->numero</span><br>";
    }
    
    //Dispo Wifi + Infos chambres :
        
        public function getRoomInfos(){
            if($this->wifi){
                $available = "Oui";
            }else{
                $available = "Non";
            }
            return "<p class='infochambre'>$this->bedNb lits - $this->prix € - Wifi : $available</p>";
            
        }
        
        //affichage icone wifi :
            
        public function afficherIcon(){
            if ($this->getWifi()) {
                $available = "<i class='fa-solid fa-wifi'></i>";
            } else {
                $available = "";
            }
            return $available;
            }

        //afficher état de la chambre :

        public function afficherEtat(){
            if ($this->etat === true) {
                return "<p class='reserv'>Réservée</p>";
            } else {
                return "<p class='dispo'>Disponible</p>";
            }
        }
            
        }