<?php

use Monolog\Logger;
class HolaMonolog{
    


public function __construct(
    private $miLog
){
$this->miLog->RotatingFileHandler("logs/milogs.log",LOGGER::DEBUG);
}

  public function saludar(LOGGER $s){
      $s->info("Hola señor/a");
  }
  public function despedir(LOGGER $s){
    $s->info("Adios señor/a");
}
}



?>