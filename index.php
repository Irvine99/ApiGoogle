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
            case 'position':
                getUniqueDates();
                break;
            case 'clics':
                getUniqueDates();
                break;
            case 'impressions':
                getUniqueDates();
                break;
            case 'ctr':
                getUniqueDates();
                break;
            
        } 
    }else{
        test();
    }

