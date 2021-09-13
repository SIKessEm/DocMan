<?php namespace SIKessEm\DocMan;

trait APITrait {

  public function setInput(InputInterface $input): InputInterface {

    return $this->input = $input;
  }

  public function getInput(): InputInterface {

    return $this->input;
  }

  public function setOutput(OutputInterface $output): OutputInterface {

    return $this->output = $output;
  }

  public function getOutput(): OutputInterface {

    return $this->output;
  }
}