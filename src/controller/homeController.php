<?php


require_once 'src/model/Performances.php';
require_once 'src/model/Periodes.php';

function test() {

    $result = new PerformancesRepo;

    $dates = $result->getDate();
    
    
    include('src/view/homePage.php');
}

function sideNavData(){
        
    require 'src/view/dataDomain.php';
}

function getUniqueDates(){
    $result = new PerformancesRepo;
    $dates = $result->getDate();
    $data = $result->getUniqueDates();

    include('src/view/homePage.php');
}





