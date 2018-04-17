#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use ConsoleComponent\Command\HelloWorldCommand;
use ConsoleComponent\Command\DayOfTheWeekCommand;

$application = new Application();

$application->add(new HelloWorldCommand());
$application->add(new DayOfTheWeekCommand());

$application->run();
