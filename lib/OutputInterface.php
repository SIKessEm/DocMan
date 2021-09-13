<?php namespace SIKessEm\DocMan;

interface OutputInterface extends StreamInterface {

  public function write(string $text, ?int $length = null): int|false;
}