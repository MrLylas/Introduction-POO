<?php

class Hotel{
//Déclarations des variables :
    private string $hotelName;
    private string $stars;
    private string $ville;
    private string $adress;
    private string $postal;
    private array $chambres;
    private array $reservations;
    
    public function __construct(string $hotelName,string $stars,string $ville, string $adress,string $postal){
        $this->hotelName = $hotelName;
        $this->stars = $stars;
        $this->ville = $ville;
        $this->adress = $adress;
        $this->postal = $postal;
        $this->chambres = [];
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

    public function addChambres(Chambres $chambre){
        $this->chambres[] = $chambre;
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

    public function getInfos(){
        return "<div class='container'><h3>".$this."</h3>".
                "<div class='adresse'><p>".$this->afficherAdress()."</p></div><hr>".
                "<p class='infochambre'>Nombre de chambres : ".count($this->chambres)."</p>".
                "<p class='infochambre'>Nombre de chambres réservées : ".count($this->reservations)."</p>".
                "<p class='infochambre'>Nombre de chambres disponibles : ".count($this->chambres) - count($this->reservations)."</p></div>";
    } 
    public function addReservations(Reservations $reservations)
    {
        $this->reservations[] = $reservations;

    }

    public function __toString()
    {
        return "$this->hotelName"."$this->stars"."$this->ville";
    }
    
    public function afficherAdress(){
        return "$this->adress "."$this->postal "."$this->ville";
    }


    public function afficherReservations(){
        $result = "<div class='container'><h3>$this</h3><hr>".
                        "<p class='nbresa'>".count($this->reservations)." Réservations :</p>";
                    if(empty($this->reservations)){
                        $result .="<p>Aucune réservations</p>";
                    } else {
                        foreach($this->reservations as $reservation){
                            $result .= "<p>Client :".$reservation->getClients()."-".$reservation->getChambres()->afficherNumero()."</p>";
                        }
                    }
                    return $result."</div>";
     }
      public function afficherStatut(){
        $result = "<div class='statut'><table>
        <thead>
            <tr>
                <th scope='co'>Chambre</th>
                <th scope='col'>PRIX</th>
                <th scope='col'>WIFI</th>
                <th scope='col'>ETAT</th>
            </tr>
        </thead>
        <tbody>";
        foreach($this->chambres as $chambre){   
        $result .= "<tr>
                    <td>".$chambre->afficherNumero()."</td>
                    <td>".$chambre->getPrix()."€</td>
                    <td>".$chambre->afficherIcon()."</td>
                    <td>".$chambre->afficherEtat()."</td>";
        }
        $result .= "</tr></tbody></table></div>";
        return $result;
      }
}
