<?php namespace SIKessEm\IO;

function ui(): API_Interface {

  static $ui;
  if(!isset($ui)) $ui = new UI;
  return $ui;
}

function it(): API_Interface {

  static $it;
  if(!isset($it)) $it = new IT;
  return $it;
}

function api(Input_Interface $input, Output_Interface $output): API_Interface{

  return new API($input, $output);
}

function input($stream): Input_Interface {

  return new Input($stream);
}

function output($stream): Output_Interface {

  return new Output($stream);
}