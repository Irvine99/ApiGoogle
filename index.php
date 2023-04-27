<?php

require 'src/controller/homeController.php';

if(isset($_GET['action']) && $_GET['action'] !== ''){
        switch($_GET['action']) {
            case 'test':
                test();
                break;
            case 'stan':
                sideNavData();
                break;
            
        } 
    }else{
        test();
    }

