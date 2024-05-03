<?php 


class controller{


        public string $_page;


        public function __construct($val){
        
                return $this->_page=$val;

        }



        public function afficherPage(){


            $page = $this->_page;

            
 

            ob_start();

                                               

                             if($page === 'Home'){

                                include('views/page/home.php');

                             }else{

                                echo 'page de page de disponible';
                             }

                             


               $content = ob_get_clean();
               include_once('views/template.php');


        }












}