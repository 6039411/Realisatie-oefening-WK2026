<?php
class Wedstrijd {
    public $wedstrijdid;
    public $datum;
    public $tijd;
    public $poule;
    public $locatie;
    public $status;
    public $stadionid;

    public function __construct($wedstrijdid, $datum, $tijd, $poule, $locatie, $status, $stadionid) {
        $this->wedstrijdid = $wedstrijdid;
        $this->datum = $datum;
        $this->tijd = $tijd;
        $this->poule = $poule;
        $this->locatie = $locatie;
        $this->status = $status;
        $this->stadionid = $stadionid;
    }

    public function assignReferee($scheidsrechterId) {
        // Implementation for assigning a referee to the match
    }
}