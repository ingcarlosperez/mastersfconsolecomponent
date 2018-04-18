#!/usr/bin/env php
<?php
// application.php

require __DIR__ . '/vendor/autoload.php';

use ConsoleComponent\Command\ColorCommand;
use ConsoleComponent\Command\DayOfTheWeekCommand;
use ConsoleComponent\Command\DaysOfTheWeekCommand;
use ConsoleComponent\Command\HelloWorldCommand;
use Symfony\Component\Console\Application;

$application = new Application("Test Console", "1.0.0");

$application->add(new HelloWorldCommand());
$application->add(new DayOfTheWeekCommand());
$application->add(new DaysOfTheWeekCommand());
$application->add(new ColorCommand());

$application->run();
