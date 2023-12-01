#!/usr/bin/env php
<?php

$dir = $argv[1];
$class = $argv[2];

$file = sprintf('%s/%s.php', $dir, $class);

include $file;

$runner = new $class();
$runner->run();