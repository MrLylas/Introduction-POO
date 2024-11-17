<?php

class Hotel{
//Déclarations des variables :
    private string $hotelName;
    private string $stars;
    private string $ville;
    private string $adress;
    private string $postal;
    private int $roomsNb;
    private int $reservationNb;
    private int $dispoRoom;  
    
    public __construct(string $hotelName,string $stars,string $ville, string $adresse,string $postal ,int $roomsNb, int $reservartionNB, int $dispoRoom){
        $this->hotelName = $hotelName;
        $this->stars = $stars;
        $this->ville = $ville;
        $this->adress = $adress;
        $this->postal = $postal;
        $this->roomsNb = $roomsNb;
        $this->reservationNb = $reservartionNb;
        $this->dispoRoom = $dispoRoom;
    }
     
}
