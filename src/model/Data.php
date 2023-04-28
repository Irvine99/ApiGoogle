<?php

class Data {
   
    public $data;

    public function __construct(){
        $file = 'domain.json'; 
        // mettre le contenu du fichier dans une variable
        $getData = file_get_contents($file); 
        // décoder le flux JSON
        $this->data = json_decode($getData,false);}
        

        public function getData() {
            return $this->data;
        }
        
    }



        


        
        





