<?php

include (RUTA_APP."/control/routes.php");

class pages extends routes{


  public function __construct(){
    //configuracion incial
    $this->ConfigModelo = $this->modelo('config');
    $this->SessionModelo = $this->modelo('session');

  }

  public function Preguntar(){

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

      $data = json_decode(file_get_contents("php://input"), true);
      $consulta = $data['consultaRecibida'];

      $respuesta = $this->ConfigModelo->select('whereLike', 'pregunta', 'pregunta', $consulta, '', '');
      echo json_encode($respuesta);
    }
  }


  public function Error($code){
    $this->vista('pages/error', $code);
  }

}//end class
?>
