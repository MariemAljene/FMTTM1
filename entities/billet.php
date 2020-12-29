<?php   class billet {
   
       //attribut
       
       private $destination; 
       private $IdBillet;
       private $prix;
       private $DateVoyage;
       private $dispo;
       
  
   
        public function __construct($destination,$IdBillet,$prix,$DateVoyage,$dispo)                   
       {
           
           $this->destination = $destination;
           $this->IdBillet=$IdBillet;
           $this->prix = $prix;
           $this->DateVoyage = $DateVoyage;
           $this->dispo = $dispo;
          
           
         
       }
   
      

       
   
       function getdestination() {
           return $this->destination;
       }
       function getIdBillet() {
        return $this->IdBillet;
    }

       function getprix() {
           return $this->prix;
       }
   
       
       
   
       function getDateVoyage() {
           return $this->DateVoyage;
       }
   
       function getdispo() {
           return $this->dispo;
       }
   
      
       
   

       function setLogin($IdBillet) {
           $this->IdBillet = $IdBillet;
       }
   
       
   
       function setdestination($destination) {
           $this->destination = $destination;
       }
   
       
       
   
       function setprix($prix) {
           $this->prix = $prix;
       }
   
       function setDateVoyage($DateVoyage) {
           $this->DateVoyage = $DateVoyage;
       }
   
       function setdispo($dispo) {
           $this->dispo = $dispo;
       }
   
      
   
       
   
       
   
     
 
  
   }
?>