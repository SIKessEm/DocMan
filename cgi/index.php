<?php

use SIKessEm\DocMan\{
  function input,
  function output
};

require_once dirname(__DIR__) . '/pkg/autoload.php';

$input = input(fopen('php://input', 'r'));
$output = output(fopen('php://output', 'w'));

$name = $input->read(1024);
$output->write("Hello $name. Welcome to DocMan!");