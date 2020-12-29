<?php   class siege {
   
       //attribut
       
       private $NumAllée; 
       private $IdSiege;
       private $NumRang;
       private $class;
       
  
   
        public function __construct($NumAllée,$IdSiege,$NumRang,$class)                   
       {
           
           $this->NumAllée = $NumAllée;
           $this->IdSiege=$IdSiege;
           $this->NumRang = $NumRang;
           $this->class = $class;
         
       }
   
      

       
   
       function getNumAllée() {
           return $this->NumAllée;
       }
       function getIdSiege() {
        return $this->IdSiege;
    }

       function getNumRang() {
           return $this->NumRang;
       }
   
       
       
   
       function getclass() {
           return $this->class;
       }
   

      
       
   
       function setNumAllée($NumAllée) {
           $this->NumAllée = $NumAllée;
       }
   
        function setLogin($IdSiege) {
           $this->IdSiege = $IdSiege;
       }
   
       
   
       function setNumRang($NumRang) {
           $this->NumRang = $NumRang;
       }
   
       function setclass($class) {
           $this->class = $class;
       }
   
       
      
   
       
   
       
   
     
 
  
   }
?>