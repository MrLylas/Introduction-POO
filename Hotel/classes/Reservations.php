<?php

class Reservations{
    private Chambres $chambre;
    private Clients $clients;
    private DateTime $checkIn;
    private DateTime $checkOut;
    
    public function __construct(Chambres $chambre ,Clients $clients, string $checkIn,string $checkOut){
        $this->chambre = $chambre;
        $this->chambre->addReservations($this);
        $this->chambre->getHotel()->addReservations($this);
        $this->clients = $clients;
        $this->clients->addReservations($this);
        $this->checkIn = new dateTime($checkIn);
        $this->checkOut = new dateTime($checkOut);
    }
    
    /**
     * Get the value of clients
     */ 
    public function getClients()
    {
        return $this->clients;
    }
    
    /**
     * Set the value of clients
     *
     * @return  self
     */ 
    public function setClients($clients)
    {
        $this->clients = $clients;
    
        return $this;
    }
    
    /**
     * Get the value of chambres
         */ 
        public function getChambres()
        {
            return $this->chambre;
        }
    
        /**
         * Set the value of chambres
         *
         * @return  self
         */ 
        public function setChambres($chambre)
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

}