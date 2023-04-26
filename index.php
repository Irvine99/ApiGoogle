<?php

require 'src/controller/homeController.php';
if(isset($_GET['action'])){
        switch($_GET['action']) {
            case 'test':
                test();
                break;
        } 
    }

test();