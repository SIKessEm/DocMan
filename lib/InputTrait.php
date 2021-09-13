<?php namespace SIKessEm\DocMan;

trait InputTrait {

  use StreamTrait;

  public function read(int $length): string|false {

    return fread($this->getStream(), $length);
  }
}