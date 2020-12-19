<?php


$plaintext = 'Ich bin ein Text in Klarschrift';
echo $plaintext . '<br>';;
$key = '5465asd5asd654654asd546544g6sadfhgfhklasdnjvjasd';

$cipher = 'aes-128-gcm';

$possible_ciphers = openssl_get_cipher_methods();

var_dump($possible_ciphers);

if (in_array($cipher, openssl_get_cipher_methods()))
{
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
    echo "Key : " . $key  . '<br>';
    echo $ciphertext . '<br>';
    //store $cipher, $iv, and $tag for decryption later
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
    echo $original_plaintext."\n";
}