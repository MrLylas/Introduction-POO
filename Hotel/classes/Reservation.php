<?php

class Reservation{
    private Chambre $chambre;
    private Client $client;
    private DateTime $checkIn;
    private DateTime $checkOut;
    
    public function __construct(Chambre $chambre ,Client $client, string $checkIn,string $checkOut){
        $this->chambre = $chambre;
        $this->chambre->addReservation($this);
        $this->client = $client;
        $this->client->addReservation($this);
        $this->checkIn = new dateTime($checkIn);
        $this->checkOut = new dateTime($checkOut);
    }
    
    /**
     * Get the value of clients
     */ 
    public function getClient()
    {
        return $this->client;
    }
    
    /**
     * Set the value of clients
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }
    
    /**
     * Get the value of chambres
         */ 
        public function getChambre()
        {
            return $this->chambre;
        }
    
        /**
         * Set the value of chambres
         *
         * @return  self
         */ 
        public function setChambre($chambre)
        {
            $this->chambre = $chambre;
    
            return $this;
        }
    
    /**
     * Get the value of checkIn
     */ 
    public function getCheckIn()
    {
        return $this->checkIn;
    }

    /**
     * Set the value of checkIn
     *
     * @return  self
     */ 
    public function setCheckIn($checkIn)
    {
        $this->checkIn = $checkIn;

        return $this;
    }

    /**
     * Get the value of checkOut
     */ 
    public function getCheckOut()
    {
        return $this->checkOut;
    }

    /**
     * Set the value of checkOut
     *
     * @return  self
     */ 
    public function setCheckOut($checkOut)
    {
        $this->checkOut = $checkOut;

        return $this;
    }

    //afficher dates de réservations :

    public function afficherDates(){
        $date = "du ".$this->checkIn->format("d-m-Y")." au ".$this->checkOut->format("d-m-Y");
        return $date;
    }

    
    //Calculer prix reservation :

    public function calculerSejour(){
        $interval = $this->checkIn->diff($this->checkOut);
        $prixTotal = $interval->format("%a") * $this->chambre->getPrix();
        return $prixTotal;
    }

}