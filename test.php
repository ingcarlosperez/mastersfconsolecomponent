#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use ConsoleComponent\Command\DayOfTheWeekCommandTest;

$test=new DayOfTheWeekCommandTest();
$test->testExecute();
