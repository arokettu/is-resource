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
            'AddressInfo' => array('sockets', 'AddressInfo'),
            'CurlHandle' => array('curl', 'curl'),
            'CurlMultiHandle' => array('curl', 'curl_multi'),
            'CurlShareHandle' => array('curl', 'curl_share'),
            'DeflateContext' => array('zlib', 'zlib.deflate'),
            'EnchantBroker' => array('enchant', 'enchant_broker'),
            'EnchantDictionary' => array('enchant', 'enchant_dict'),
            'FTP\\Connection' => array('ftp', 'FTP Buffer'),
            'GMP' => array('gmp', 'GMP integer'),
            'GdImage' => array('gd', 'gd'),
            'HashContext' => array('hash', 'Hash Context'),
            'IMAP\\Connection' => array('imap', 'imap'),
            'InflateContext' => array('zlib', 'zlib.inflate'),
            'LDAP\\Connection' => array('ldap', 'ldap link'),
            'OpenSSLAsymmetricKey' => array('openssl', 'OpenSSL key'),
            'OpenSSLCertificate' => array('openssl', 'OpenSSL X.509'),
            'OpenSSLCertificateSigningRequest' => array('openssl', 'OpenSSL X.509 CSR'),
            'Shmop' => array('shmop', 'shmop'),
            'Socket' => array('sockets', 'Socket'),
            'SysvMessageQueue' => array('sysvmsg', 'sysvmsg queue'),
            'SysvSemaphore' => array('sysvsem', 'sysvsem'),
            'SysvSharedMemory' => array('sysvshm', 'sysvshm'),
            'XMLParser' => array('xml', 'xml'),
            'XMLWriter' => array('xmlwriter', 'xmlwriter'),
            'finfo' => array('fileinfo', 'file_info'),
        );
    }
}
