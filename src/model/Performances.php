<?php
require_once ('src/config/connect_api.php');
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

    public function getDate()
    {
        $newDates = new ConnectApi;
        $newDates->setDate($_POST["startDate"], $_POST["endDate"]); 
        return $newDates;
    }

    public function getCliksByDate(){
        $data = $this->data;
        $clickbydate = array();
        foreach ($data->performance as $key => $value) {
            $clickbydate = new Performances;
            
            $clickbydate->date = $key;
            $clickbydate->clicks = $value->clicks;
            $clickbydate->impressions = $value->impressions;
            $clickbydate->ctr = $value->ctr;
            $clickbydate->position = $value->average_position;

            $clicksbydates[] = $clickbydate;
        }return $clicksbydates;

    }

}