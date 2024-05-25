<?php
    include 'functions.php';
$action = $_GET['action'] ?? '';


if ($action == 'newAd') {
   newAd();
}

if ($action == 'allDatas') {
        getAllDatas();
 }

 if ($action == 'availableDatas') {
    getAvailableDatas();
}

if($action == 'search'){
    search();
}

if($action == 'getProperty'){
    getProperty();
}