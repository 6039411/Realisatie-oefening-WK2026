<?php
class Wedstrijdverslag {
    public $verslagid;
    public $wedstrijdid;
    public $scheidsrechterid;
    public $score;
    public $geleKaarten;
    public $rodeKaarten;
    public $opmerkingen;
    
    public function __construct($verslagid, $wedstrijdid, $scheidsrechterid, $score, $geleKaarten, $rodeKaarten, $opmerkingen) {
        $this->verslagid = $verslagid;
        $this->wedstrijdid = $wedstrijdid;
        $this->scheidsrechterid = $scheidsrechterid;
        $this->score = $score;
        $this->geleKaarten = $geleKaarten;
        $this->rodeKaarten = $rodeKaarten;
        $this->opmerkingen = $opmerkingen;
    }
    
    public function submitMatchReport() {
        // Implementation for submitting the match report
    }
}