<?php   class offre {
   
       //attribut
       
       
       private $IdOffre;
       private $code;
       private $pourcentage;
       
       
  
   
        public function __construct($IdOffre,$code,$pourcentage)                   
       {
           
          
           $this->IdOffre=$IdOffre;
           $this->code = $code;
           $this->pourcentage = $pourcentage;
          
          
           
         
       }
   
      

       
   
       
       function getIdOffre() {
        return $this->IdOffre;
    }

       function getcode() {
           return $this->code;
       }
   
       
       
   
       function getpourcentage() {
           return $this->pourcentage;
       }
   
       function getdispo() {
           return $this->dispo;
       }
   
      
       
   

       function setLogin($IdOffre) {
           $this->IdOffre = $IdOffre;
       }
   
       
   
       
       
       
   
       function setcode($code) {
           $this->code = $code;
       }
   
       function setpourcentage($pourcentage) {
           $this->pourcentage = $pourcentage;
       }
   
       
      
   
       
   
       
   
     
 
  
   }
?>