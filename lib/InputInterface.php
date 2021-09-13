<?php namespace SIKessEm\DocMan;

interface InputInterface extends StreamInterface {

  public function read(int $length): string|false;
}