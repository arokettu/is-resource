#!/usr/bin/env php
<?php

require __DIR__ . '/func/functions.php';

$versionMaps = require __DIR__ . '/../data/object_maps.php';
ksort($versionMaps); // just in case

$combinedMaps = array();
$totalMap = array();

foreach ($versionMaps as $version => $map) {
    $totalMap += $map;
    ksort($totalMap);
    $combinedMaps[$version] = $totalMap;
}

$combinedMaps['Empty'] = array();

// generate specific versions
foreach ($combinedMaps as $version => $map) {
    file_put_contents(
        __DIR__ . '/../src/gen/ResourceMap' . $version . '.php',
        render('ResourceMap', array(
            'map' => $map,
            'version' => $version,
        ))
    );
}

// generate loader
file_put_contents(
    __DIR__ . '/../src/ResourceMap.php',
    render('ResourceMapLoader', array('versions' => array_reverse(array_keys($versionMaps))))
);
