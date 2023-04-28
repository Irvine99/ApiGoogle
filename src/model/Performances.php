<?php

require_once 'src/model/Data.php';

class Performances {
    public $clicks;
    public $impressions;
    public $ctr;
    public $position;
    public $date;
}

class PerformancesRepo extends Data {

    public function __construct(){
        parent::__construct();
    }

    public function getUniqueDates() {
        if($_POST) {
        $datePost = $_POST['Coucou'];
       
        $uniqueDates = array();
        $result = $this->data;
        
        
        $data = [];
        foreach ($result->performance as $key => $value) {    
                 if($key == $datePost) {
                    $data = $value;
                
            }
            
        }
        return $data;

    }}

    public function getDate(){
        $dates = $this->data;
        $newDates = [];
        foreach ($dates->performance as $key => $value) {
            $newDate = new Performances;
            $newDate  = $key;
            $newDates[] = $newDate;
            
        }
        return $newDates;
    }
}