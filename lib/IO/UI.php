<?php namespace SIKessEm\IO;

class UI extends API {

  public function __construct() {

    parent::__construct(
      new Input(fopen('php://input', 'r')),
      new Output(fopen('php://output', 'w'))
    );
  }
}