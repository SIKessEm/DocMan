<?php namespace SIKessEm\DocMan;

function input($stream): Input {

  return new Input($stream);
}

function output($stream): Output {

  return new Output($stream);
}