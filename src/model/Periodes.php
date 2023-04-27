<?php

class Periodes {
   
    public $dateDebut;
    public $dateFin;

    public function __construct(){
        $this->dateDebut;
        $this->dateFin;
    }

    public function getDate(){
        $data = new Data;
        $result = $data->getData();
        $results = [];
        foreach($result as $value){
            $keepDate = new Periodes;
           
            $keepDate->dateDebut = $value->periode['debut'];
            $keepDate->dateFin = $value->periode['fin'];
            $results[] = $keepDate;
        }
        
        return $results;
        
    }
}