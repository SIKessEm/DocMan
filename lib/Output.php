<?php namespace SIKessEm\DocMan;

class Output {

  public function __construct(protected $stream) {}

  public function write(string $text, ?int $length = null): int|false {

    return fwrite($this->stream, $text, $length);
  }

  public function __destruct() {

    fclose($this->stream);
  }
}