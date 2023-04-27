<?php

class Data {
    public $periode;
    public $performances;
    public $pages;

    public function __construct(){
        $this->periode = "";
        $this->performances = "";
        $this->pages = "";
    }

    public function getData(){
        $file = 'domain.json'; 
        // mettre le contenu du fichier dans une variable
        $getData = file_get_contents($file); 
        // décoder le flux JSON
        $obj = json_decode($getData,true);
        
        $datas = [];
        foreach ($obj as $value) {
            $data = new Data;
            $data->periode = $value['periode'];
            $data->performances = $value['performances'];
            $data->pages = $value['pages'];
            $datas[] = $data;
            
            return $data;
        }
        
    }
}


