<?php

class routeur{

 public string $root;


public function __construct($val){


   return $this->root=$val;

}


public function setRoot(){

      $page = $this->root;



      include_once('controller/controllerClass.php');
      $control = new controller($page);
      $control->afficherPage();



}












}