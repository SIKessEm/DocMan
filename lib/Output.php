<?php namespace SIKessEm\DocMan;

class Output extends AbstractOutput {

  use OutputTrait;

  public function write(string $text, ?int $length = null): int|false {

    return fwrite($this->getStream(), $text, $length);
  }
}