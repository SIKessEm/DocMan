<?php namespace SIKessEm\IO;

trait Output_Trait {

  use Stream_Trait;

  public function write(string $text, ?int $length = null): int|false {

    return fwrite($this->getStream(), $text, $length);
  }
}