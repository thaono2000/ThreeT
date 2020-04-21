<?php
    class Base_Controller{        
        public function view($views, $data=[]) {
            require_once 'views/layouts/'.$views.'.php';
        }
        
        public function model($models){
            require_once 'models/'.$models.'.php';
        }
    }
?>


