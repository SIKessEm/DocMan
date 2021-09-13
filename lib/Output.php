<?php namespace SIKessEm\DocMan;

class Output implements OutputInterface {

  use OutputTrait;

  public function __construct(protected $stream) {}

  public function write(string $text, ?int $length = null): int|false {

    return fwrite($this->stream, $text, $length);
  }

  public function __destruct() {

    fclose($this->stream);
  }
}