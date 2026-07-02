<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    ? 'https'
    : 'http';

// define('BASE_URL', $protocol . '://' . $_SERVER['HTTP_HOST']); // php -S localhost:8000
define('BASE_URL', 'http://localhost/PWEB%202/UAS/data_aset_barang'); // untuk mysql