#!/usr/bin/env php
<?php
require 'lib.php';

$data = file_get_contents('input');

$data = trim($data);
$data = explode("\n", $data);

printf('a: %s', lib::a($data) . "\n");

printf('b: %s', lib::b($data) . "\n");
