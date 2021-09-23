<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/assert.php';

$testCases = array();

$testCases[] = array('gd', function() { return imagecreate(100, 100); });
$testCases[] = array('GMP integer', function() { return gmp_init('1'); });
$testCases[] = array('Hash Context', function() { return hash_init('md5'); });

foreach ($testCases as $testCase) {
    list($resourceType, $callback) = $testCase;

    $resource = $callback();

    assert_true(\Arokettu\IsResource\is_resource($resource));
    assert_equals($resourceType, \Arokettu\IsResource\get_resource_type($resource));
    assert_equals($resourceType, \Arokettu\IsResource\try_get_resource_type($resource));
}
