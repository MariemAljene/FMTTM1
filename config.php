<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
    try{
        self::$instance = new PDO('mysql:host=localhost;dbname=fmttm', 'root', '');
    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
            die('Erreur: '.$e->getMessage());

    }
      }
      return self::$instance;
    }
  }
?>