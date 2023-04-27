<?php

require 'src/model/Data.php';

class Performances {

    public $clics;
    public $impression;
    public $ctr;
    public $position_moyenne;


    public function __construct(){
        $this->clics;
        $this->impression;
        $this->ctr;
        $this->position_moyenne;

    }

    // public function getClics(){
    //     $data = new Data;
    //     $result = $data->getData();
    //     $clicsArray = [];
    //     foreach ($result as $key => $data) {
    //         $perfo = new Performances;
    //         $perfo->clics = $data->performances['clics'];
    //         $clicsArray[] = $perfo->clics;
    //     }
    //     var_dump($clicsArray);
    //     }
        
        
            
        
    
}
