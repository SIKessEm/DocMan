<?php

use SIKessEm\DocMan\{
  function output
};

require_once dirname(__DIR__) . '/pkg/autoload.php';

$output = output(fopen('php://output', 'r'));
$output->write('Welcome to DocMan!');