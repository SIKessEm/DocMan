<?php namespace SIKessEm\DocMan;

interface APIInterface {

  public function setInput(InputInterface $input): InputInterface;

  public function getInput(): InputInterface;

  public function setOutput(OutputInterface $output): OutputInterface;

  public function getOutput(): OutputInterface;
}