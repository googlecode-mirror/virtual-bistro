<?php
 
 class HomeController extends AppController{
    public function index() {
    	$this -> set('title_for_layout', 'Bem Vindo : Virtual-Bistrô');
        $this->layout =  'homeindex';
		   
    }
     		
 }

?>