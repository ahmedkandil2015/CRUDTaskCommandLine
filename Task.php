#! /usr/bin/env php
<?php

use Symfony\Component\Console\Command;
require'vendor/autoload.php';


$app = new Application('Task Console','1.0');
$app->add(new Acme\ShowCommand);
$app->run();