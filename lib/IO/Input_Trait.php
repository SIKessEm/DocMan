<?php namespace SIKessEm\IO;

trait Input_Trait {

  use Stream_Trait;

  public function read(int $length): string|false {

    return fread($this->getStream(), $length);
  }
}