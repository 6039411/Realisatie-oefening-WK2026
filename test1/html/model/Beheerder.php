<?php
class Beheerder extends User {
    public function __construct($id, $email, $wachtwoord, $voornaam, $achternaam) {
        parent::__construct($id, $email, $wachtwoord, $voornaam, $achternaam);
    }

    public function approveSupporter($supporterId) {
        // Logica om een supporter goed te keuren
    }

    public function assignFanID() {
        // Logica om een fan-ID toe te wijzen
    }

    public function manageMatches() {

    }
    
    public function assignReferees() {

    }

    public function approveRejectRefereeRequests() {

    }

    public function createScheidsrechter() {

    }

    public function updateScheidsrechter() {

    }

    public function deleteScheidsrechter() {

    }
    
    public function createstadion() {

    }

    public function updatestadion() {

    }

    public function deletestadion() {

    }
}