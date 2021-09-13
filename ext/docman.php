<?php namespace SIKessEm\DocMan;

function ui(): APIInterface {

  static $ui;
  if(!isset($ui)) $ui = new UI;
  return $ui;
}

function it(): APIInterface {

  static $it;
  if(!isset($it)) $it = new IT;
  return $it;
}

function api(InputInterface $input, OutputInterface $output): APIInterface{

  return new API($input, $output);
}

function input($stream): InputInterface {

  return new Input($stream);
}

function output($stream): OutputInterface {

  return new Output($stream);
}