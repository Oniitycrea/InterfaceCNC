<?php
session_start();
require_once('_classes/router.php');


if(isset($get['page'])){



    $page=htmlspecialchars($_GET['page']);
}else{



    $page = 'Home';
}



$routeur = new routeur($page);
$routeur->setRoot();



