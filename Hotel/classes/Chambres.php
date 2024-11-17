<?php

class Chambres{
    private string $numero; 
    private float $prix;
    private int $bedNb;
    private bool $wifi;
    private Hotel $hotel;

    public function __construct(string $numero,float $prix,int $bedNb,bool $wifi, Hotel $hotel){
        $this->numero = $numero;
        $this->prix = $prix;
        $this->bedNb = $bedNb;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
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
}