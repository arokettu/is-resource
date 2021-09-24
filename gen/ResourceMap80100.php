<?php

namespace Arokettu\IsResource;

/**
 * @internal
 * @generated
 */
final class ResourceMap80100
{
    /**
     * @return array
     */
    public static function map()
    {
        return array(
            'CurlHandle' => array('curl', 'curl'),
            'CurlMultiHandle' => array('curl', 'curl_multi'),
            'CurlShareHandle' => array('curl', 'curl_share'),
            'GMP' => array('gmp', 'GMP integer'),
            'GdImage' => array('gd', 'gd'),
            'HashContext' => array('hash', 'Hash Context'),
            'finfo' => array('fileinfo', 'file_info'),
        );
    }
}
