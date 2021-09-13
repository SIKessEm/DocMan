<?php namespace SIKessEm\DocMan;

abstract class AbstractInput implements InputInterface {

  public function __construct($stream) {

    $this->setStream($stream);
  }

  public function __destruct() {

    fclose($this->getStream());
  }
}