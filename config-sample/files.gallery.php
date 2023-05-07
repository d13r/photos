<?php

// For the bin/build-cache script
$isLocal = $_SERVER['REMOTE_ADDR'] === '127.0.0.1';

return [
    'username' => $isLocal ? false : 'USERNAME HERE',
    'password' => $isLocal ? false : 'PASSWORD HERE',
    'license_key' => 'LICENSE KEY HERE',
];
