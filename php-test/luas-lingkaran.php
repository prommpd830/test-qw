<?php
    Class lingkaran{
        public $radius = 20;
        function setRadius ($radius){ 
            $this->radius=$radius;
        }
        function getRadius(){
            $radius=$this->radius; return $radius;
        }
        function tampil($radius){
        $luas=3.14*$radius*$radius; echo "luas lingkaran adalah " .$luas; }
    }
    $Lingkaranku=new lingkaran (); 
    $Lingkaranku->tampil(5);
?>