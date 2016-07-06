<?php


class PersonaBEAN 
{
  public $codperso;
  public $nombperso;
  public $apelliperso;
  function getCodperso() {
      return $this->codperso;
  }

  function getNombperso() {
      return $this->nombperso;
  }

  function getApelliperso() {
      return $this->apelliperso;
  }

  function setCodperso($codperso) {
      $this->codperso = $codperso;
  }

  function setNombperso($nombperso) {
      $this->nombperso = $nombperso;
  }

  function setApelliperso($apelliperso) {
      $this->apelliperso = $apelliperso;
  }


  
}
?>