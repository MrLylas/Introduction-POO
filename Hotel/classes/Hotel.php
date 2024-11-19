<?php

class Hotel{
//Déclarations des variables :
    private string $hotelName;
    private string $stars;
    private string $ville;
    private string $adress;
    private string $postal;
    private array $chambres;
    // private array $reservations;
    
    public function __construct(string $hotelName,string $stars,string $ville, string $adress,string $postal){
        $this->hotelName = $hotelName;
        $this->stars = $stars;
        $this->ville = $ville;
        $this->adress = $adress;
        $this->postal = $postal;
        $this->chambres = [];
        // $this->reservations = [];
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

    //ajout d'une chambre

    public function addChambre(Chambre $chambre){
        $this->chambres[] = $chambre;
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
    
    //Afficher réservations :

    public function afficherReservation(){
        $count= 0;
        foreach($this->chambres as $chambre){
            foreach($chambre->getReservations() as $reservation){
                $count++;
            }
        }
        if($count <= 0){
            return "Aucune reservation !";
        }
        else{
        $nbEmptyRoom = (count($this->chambres) - $count);
        return "Total de chambres :<br>".count($this->chambres)."<br>".
                "<br> Nombre de chambres reservées: ".$count.
                "<br> Nombre de chambres disponible ".$nbEmptyRoom."<br><br>";
        }
    }
    //Récuperer infos sur l'hotel et sa disponibilité :
    
    public function getInfos(){
        return "<h3>".$this."</h3>".
                "<p>".$this->afficherAdress()."</p><hr><br>".
                "".$this->afficherReservation()."";
    } 

    public function __toString()
    {
        return "$this->hotelName"."$this->stars"."$this->ville";
    }

    
    //afficher adresse hotel :
    
    public function afficherAdress(){
        return "$this->adress "."$this->postal "."$this->ville";
    }
     //aficher statuts des chambres :

      public function afficherStatut(){
        $result = "<table>
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
        $result .= "</tr></tbody></table>";
        return $result;
      }
}
