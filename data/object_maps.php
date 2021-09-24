<?php

// top key is PHP_VERSION_ID for the resource change introduction

// child arrays are maps 'new class name' => 'old resource type string'

return array(
    50600 => array(
        'gmp' => array(
            'GMP' => 'GMP integer',
        ),
    ),
    70200 => array(
        'hash' => array(
            'HashContext' => 'Hash Context'
        ),
    ),
    80000 => array(
        'curl' => array(
            'CurlHandle' => 'curl',
            'CurlMultiHandle' => 'curl_multi',
            'CurlShareHandle' => 'curl_share',
        ),
        'enchant' => array(
            'EnchantBroker' => 'enchant_broker',
            'EnchantDictionary' => 'enchant_dict',
        ),
        'gd' => array(
            'GdImage' => 'gd',
        ),
        // ext-openssl
        // TODO
        'shmop' => array(
            'Shmop' => 'shmop',
        ),
        'sockets' => array(
            'AddressInfo' => 'AddressInfo',
            'Socket' => 'Socket',
        ),
        'sysvmsg' => array(
            'SysvMessageQueue' => 'sysvmsg queue',
        ),
        'sysvsem' => array(
            'SysvSemaphore' => 'sysvsem',
        ),
        'sysvshm' => array(
            'SysvSharedMemory' => 'sysvshm',
        ),
        'xml' => array(
            'XMLParser' => 'xml',
        ),
        'xmlwriter' => array(
            'XMLWriter' => 'xmlwriter',
        ),
        'zlib' => array(
            'DeflateContext' => 'zlib.deflate',
            'InflateContext' => 'zlib.inflate',
        ),
    ),
    80100 => array(
        'fileinfo' => array(
            'finfo' => 'file_info',
        ),
        'ftp' => array(
            'FTP\Connection' => 'FTP Buffer',
        ),
        'imap' => array(
            'IMAP\Connection' => 'imap',
        ),
        'ldap' => array(
            'LDAP\Connection' => 'ldap link',
        ),
        // ext-pgsql
        // TODO
        // ext-pspell
        // TODO
    ),
);
