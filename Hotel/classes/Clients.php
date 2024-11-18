<?php

class Clients{
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
     * Set the value of reservations
     *
     * 
     */ 
    public function addReservations(Reservations $reservations)
    {
        $this->reservations[] = $reservations;

    }

    //to string :

    public function __toString()
    {
        return "$this->prenom $this->nom";
    }

    //fonction de calcul temps de séjour :

    public function calculerSejour()
    {
        $total = 0;
        foreach ($this->reservations as $reservation) {
            $arrive = $reservation->getcheckIn();
            $depart = $reservation->getcheckOut();
            $interval = $arrive->diff($depart);

            $total += $interval->d * $reservation->getChambres()->getPrix();
        }
        return $total;
    }

    //afficher les réservations clients :

    public function afficherReservations()
    {
        $result = "<div class='container'><h3>Réservations de $this</h3><hr>
                    <p class='nbresa'>" . count($this->reservations) . " Réservations</p>";
        if (empty($this->reservations)) {
            $result .= "<p>Aucune réservations !</p>";
        } else {
            foreach ($this->reservations as $reservation) {
                $result .= "<p><span>Hotel : " . $reservation->getChambres()->getHotel() . "</span> / " . $reservation->getChambres()->afficherNumero() . " " . $reservation->getChambres()->getRoomInfos() . " " . $reservation->afficherDates() . "</p>";
            }
        }
        $result .= "Total : " . $this->calculerSejour() . " €";
        return $result."</div>";
    }
}