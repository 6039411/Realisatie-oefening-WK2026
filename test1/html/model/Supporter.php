<?php
class Supporter extends User {
    private $adres;

    public function __construct($id, $email, $wachtwoord, $voornaam, $achternaam, $adres) {
        parent::__construct($id, $email, $wachtwoord, $voornaam, $achternaam);
        $this->adres = $adres;
    }

    public function getAdres() {
        return $this->adres;
    }

    public function uploadiDDocument() {

    }

    public function recieveFanID() {
        // Implementation for receiving fan ID
    }

    public function viewAvailableMatches() {

    }

    public function orderTickets() {

    }

    public function cancelTicket() {
        
    }
}
