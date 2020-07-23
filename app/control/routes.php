<?php

class routes extends control{

  public function __construct(){

    $this->SessionModelo = $this->modelo('session');

  }

  public function index(){

    $this->vista('pages/construct');

  }


}//end class
?>
