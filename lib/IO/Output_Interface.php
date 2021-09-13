<?php namespace SIKessEm\IO;

interface Output_Interface extends Stream_Interface {

  public function write(string $text, ?int $length = null): int|false;
}