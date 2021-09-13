<?php namespace SIKessEm\DocMan;

class Output implements OutputInterface {

  use OutputTrait;

  public function __construct($stream) {

    $this->setStream($stream);
  }

  public function write(string $text, ?int $length = null): int|false {

    return fwrite($this->getStream(), $text, $length);
  }

  public function __destruct() {

    fclose($this->getStream());
  }
}