<?php

$hello = 'hello';
$enc = '';
$key = 'shanks';
$iv = 123456781234507;

function my_encrypt_openssl($hello, $key, $iv ) {
    $enc = openssl_encrypt($hello, 'AES-128-CBC' ,$key, 0, $iv);
    return $enc;
}

function my_decryption_openssl($to_dec, $key, $iv) {
    $dec = openssl_decrypt($to_dec, 'AES-128-CBC', $key, 0, $iv);
    return $dec;
}

$to_dec = my_encrypt_openssl($hello, $key, $iv);
echo $to_dec;

echo my_decryption_openssl( $to_dec, $key, $iv);