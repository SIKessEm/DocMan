<?php namespace SIKessEm\IO;

class IT extends API {

  public function __construct() {

    parent::__construct(
      new Input(STDIN),
      new Output(STDERR)
    );
  }
}