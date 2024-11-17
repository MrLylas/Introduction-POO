<?php

class Reservations{
    private Chambres $chambres;
    private Clients $clients;
    private DateTime $checkIn;
    private DateTime $checkOut;
    
    public function __construct(Chambres $chambres ,Clients $clients, string $checkIn,string $checkOut){
        $this->chambres = $chambres;
        $this->clients = $clients;
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
            return $this->chambres;
        }
    
        /**
         * Set the value of chambres
         *
         * @return  self
         */ 
        public function setChambres($chambres)
        {
            $this->chambres = $chambres;
    
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

}