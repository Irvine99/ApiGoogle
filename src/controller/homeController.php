<?php


require_once 'src/model/Performances.php';

function test() {
    $data = new Performances;
    $data->getClics();
    include('src/view/homePage.php');
}

function sideNavData(){
        
    require 'src/view/dataDomain.php';
}



