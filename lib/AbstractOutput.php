<?php namespace SIKessEm\DocMan;

abstract class AbstractOutput implements OutputInterface {

  public function __construct($stream) {

    $this->setStream($stream);
  }

  public function __destruct() {

    fclose($this->getStream());
  }
}