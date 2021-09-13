<?php namespace SIKessEm\DocMan;

abstract class AbstractAPI implements APIInterface {

  public function __construct(InputInterface $input, OutputInterface $output) {

    $this->setInput($input);
    $this->setOutput($output);
  }
}