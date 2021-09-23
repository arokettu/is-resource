<?php

namespace Arokettu\IsResource;

if (PHP_VERSION_ID >= 80100) {
    require __DIR__ . '/gen/ResourceMap80100.php';
    class_alias('Arokettu\\IsResource\\ResourceMap80100', 'Arokettu\\IsResource\\ResourceMap');
    return;
}

if (PHP_VERSION_ID >= 80000) {
    require __DIR__ . '/gen/ResourceMap80000.php';
    class_alias('Arokettu\\IsResource\\ResourceMap80000', 'Arokettu\\IsResource\\ResourceMap');
    return;
}

if (PHP_VERSION_ID >= 70200) {
    require __DIR__ . '/gen/ResourceMap70200.php';
    class_alias('Arokettu\\IsResource\\ResourceMap70200', 'Arokettu\\IsResource\\ResourceMap');
    return;
}

if (PHP_VERSION_ID >= 50600) {
    require __DIR__ . '/gen/ResourceMap50600.php';
    class_alias('Arokettu\\IsResource\\ResourceMap50600', 'Arokettu\\IsResource\\ResourceMap');
    return;
}

class_alias('Arokettu\\IsResource\\ResourceMapEmpty', 'Arokettu\\IsResource\\ResourceMap');

if (\false) {
    /**
     * @internal
     * @generated
     */
    final class ResourceMap
    {
        /**
         * @return array
         */
        public static function map()
        {
            return array();
        }
    }
}
