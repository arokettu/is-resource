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
        // ext-enchant
        // TODO
        'gd' => array(
            'GdImage' => 'gd',
        ),
        // ext-openssl
        // TODO
        // ext-shmop
        // TODO
        // ext-sockets
        // TODO
        // ext-sysvmsg
        // TODO
        // ext-sysvsem
        // TODO
        // ext-sysvshm
        // TODO
        // ext-xml
        // TODO
        // ext-xmlwriter
        // TODO
        // ext-zlib
        // TODO
    ),
    80100 => array(
        'fileinfo' => array(
            'finfo' => 'file_info',
        ),
        // ext-ftp
        // TODO
        // ext-imap
        // TODO
        // ext-ldap
        // TODO
        // ext-pgsql
        // TODO
        // ext-pspell
        // TODO
    ),
);
