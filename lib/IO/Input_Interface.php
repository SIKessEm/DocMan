<?php namespace SIKessEm\IO;

interface Input_Interface extends Stream_Interface {

  public function read(int $length): string|false;
}