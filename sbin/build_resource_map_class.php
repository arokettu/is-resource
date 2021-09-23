<?php

require __DIR__ . '/func/functions.php';

$versionMaps = require __DIR__ . '/../data/object_maps.php';
ksort($versionMaps); // just in case

$combinedMaps = array();
$totalMap = array();

foreach ($versionMaps as $version => $map) {
    $totalMap += $map;
    $combinedMaps[$version] = $totalMap;
}

foreach ($combinedMaps as $version => $map) {
    ob_start();
    require __DIR__ . '/../data/ResourceMap.tpl.php';
    file_put_contents(__DIR__ . '/../src/gen/ResourceMap' . $version . '.php', ob_get_clean());
}
