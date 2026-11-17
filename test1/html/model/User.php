<?php

abstract class User {
    protected $id;
    protected $email;
    protected $wachtwoord;
    protected $voornaam;
    protected $achternaam;


    public function __construct($id, $email, $wachtwoord, $voornaam, $achternaam) {
        $this->id = $id;
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
    }

    public function getId() {
        return $this->id;
    }

    public function getVoornaam() {
        return $this->voornaam;
    }

    public function getAchternaam() {
        return $this->achternaam;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getWachtwoord() {
        return $this->wachtwoord;
    }
    
    
public function login() {

}

public function editProfile() {

}

};
