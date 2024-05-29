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

if($action == 'pause'){
    pause();
}

if($action == 'publish'){
    publish();
}

if($action == 'delete'){
    delete();
}

if($action == 'threeAds'){
    threeAds();
}






if($action == 'login'){
    login();
}

if($action == 'logout'){
    logout();
}
