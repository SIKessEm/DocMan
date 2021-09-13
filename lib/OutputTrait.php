<?php namespace SIKessEm\DocMan;

trait OutputTrait {

  use StreamTrait;

  public function write(string $text, ?int $length = null): int|false {

    return fwrite($this->getStream(), $text, $length);
  }
}