<?php

class Data {
    public $periode;
    public $performances;
    public $pages;
    public $key;

    public function __construct(){
        $this->periode = "";
        $this->performances = "";
        $this->pages = "";
        $this->key = "";
    }


    public function getData(){
        $file = 'domain.json'; 
        // mettre le contenu du fichier dans une variable
        $getData = file_get_contents($file); 
        // décoder le flux JSON
        $obj = json_decode($getData,true);
        $results = [];
        

        foreach ($obj as $key => $value) {
            
            $result = new Data;
            $result->periode = $value['periode'];
            $result->performances = $value['performances'];
            $result->pages = $value['pages'];
            $result->key = $key;

            $results[] = $result;
            
            
        }
        
        return $results;
    }

    public function dataZero(){
        $result = new Data;
        $data = $result->getData();

        return $data[0];
    }    
    public function dataOne(){
        $result = new Data;
        $data = $result->getData();

        return $data[1];
    }    
    public function dataTwo(){
        $result = new Data;
        $data = $result->getData();

        return $data[2];
    }    
        
        


}


