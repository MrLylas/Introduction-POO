<?php

class Client{
    private string $prenom;
    private string $nom;
    private array $reservations;


    public function __construct(string $prenom,string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->reservations = [];
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
     * Get the value of reservations
     */ 
    public function getReservation()
    {
        return $this->reservations;
    }

    /**
     * Set the value of reservations
     *
     * @return  self
     */ 
    public function setReservation($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

        /**
     * Set the value of reservations
     *
     * 
     */ 
    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;

    }

    //to string :

    public function __toString()
    {
        return "$this->prenom $this->nom";
    }

    
    //afficher les réservations clients :

    public function afficherReservation()
    {
        $result = "<div><h3>Réservations de $this</h3><hr><br>
                    <p class='nbresa'>" . count($this->reservations) . " Réservations</p><br>";
        if (empty($this->reservations)) {
            $result .= "<p>Aucune réservations !</p>";
        } else {
            foreach ($this->reservations as $reservation) {
                $result .= "<p><span>Hotel : " . $reservation->getChambre()->getHotel() . "</span> / " . $reservation->getChambre()->afficherNumero() . "<br>" . $reservation->getChambre()->getRoomInfos() . " " . $reservation->afficherDates() . "</p></div><br>";
            }
        }
        return $result;
    }

    public function prixTotalClient(){

        foreach ($this->reservations as $reservation){
            $totaux = $reservation->calculerSejour();
        }
        return $totaux;
    }
}