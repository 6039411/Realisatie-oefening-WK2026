<?php
class Scheidsrechter extends User {
    private $beschikbaarheid;   

    public function __construct($id, $email, $wachtwoord, $voornaam, $achternaam) {
        parent::__construct($id, $email, $wachtwoord, $voornaam, $achternaam);
    }

    public function getBeschikbaarheid() {
        return $this->beschikbaarheid;
    }

    public function viewScheduledMatches() {
        // Implementation for viewing scheduled matches
    }

    public function rejectMatch() {

    }

    public function requestOffiate() {

    }
    
}

