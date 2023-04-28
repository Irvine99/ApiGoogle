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
            case 'info':
                test();
                break;
            case 'getValue':
                getUniqueDates();
                break;
            
        } 
    }else{
        test();
    }

