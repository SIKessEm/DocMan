<?php namespace SIKessEm\DocMan;

class Input extends AbstractInput {

  use InputTrait;

  public function read(int $length): string|false {

    return fread($this->getStream(), $length);
  }
}