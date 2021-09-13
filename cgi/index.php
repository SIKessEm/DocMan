<?php

use SIKessEm\DocMan\{
  function ui
};

require_once dirname(__DIR__) . '/pkg/autoload.php';

$ui = ui();

$input = $ui->getInput();
$output = $ui->getOutput();

$name = $input->read(1024);
$output->write("Hello $name. Welcome to DocMan!");