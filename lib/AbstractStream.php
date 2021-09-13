<?php namespace SIKessEm\DocMan;

abstract class AbstractStream implements StreamInterface {

  public function __construct($stream) {

    $this->setStream($stream);
  }

  public function __destruct() {

    fclose($this->getStream());
  }
}