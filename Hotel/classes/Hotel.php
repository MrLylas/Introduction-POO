<?php

class Hotel{
//Déclarations des variables :
    private string $hotelName;
    private string $stars;
    private string $ville;
    private string $adress;
    private string $postal;
    private array $reservations;
    
    public function __construct(string $hotelName,string $stars,string $ville, string $adress,string $postal){
        $this->hotelName = $hotelName;
        $this->stars = $stars;
        $this->ville = $ville;
        $this->adress = $adress;
        $this->postal = $postal;
        $this->reservations = [];
    }
     

    /**
     * Get the value of hotelName
     */ 
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Set the value of hotelName
     *
     * @return  self
     */ 
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;

        return $this;
    }

    /**
     * Get the value of stars
     */ 
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Set the value of stars
     *
     * @return  self
     */ 
    public function setStars($stars)
    {
        $this->stars = $stars;

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
     * Get the value of adress
     */ 
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */ 
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of postal
     */ 
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Set the value of postal
     *
     * @return  self
     */ 
    public function setPostal($postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Get the value of roomsNb
     */ 
    public function getRoomsNb()
    {
        return $this->roomsNb;
    }

    /**
     * Set the value of roomsNb
     *
     * @return  self
     */ 
    public function setRoomsNb($roomsNb)
    {
        $this->roomsNb = $roomsNb;

        return $this;
    }
}
