<?php


require_once 'src/model/Performances.php';
require_once 'src/model/Periodes.php';

function test() {
    $dataInfo = new Data;
    $info = $dataInfo->dataZero();
    $infoOne = $dataInfo->dataOne();
    $infoTwo = $dataInfo->dataTwo();
    $data = dataClick();
    var_dump($data);
    
    include('src/view/homePage.php');
}

function sideNavData(){
        
    require 'src/view/dataDomain.php';
}

function dataClick(){
    if(empty($_GET['action'])){
        return $data = "que dalle fréro";
    }
    elseif($_GET['action'] == 'info'){
        $dataInfo = new Data;
        $data = $dataInfo->dataZero();
        return $data->performances['clics'];
    }
}


