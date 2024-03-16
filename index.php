<?php

$name = "Ferdous Ahmed Khan";
$email = "ferdous@nassa.com.bd";

$plaintext = $name . "-" . $email;

$cipher = "aes-128-gcm";
$key = "404";

if (in_array($cipher, openssl_get_cipher_methods())) {
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, 0, $iv, $tag);
    echo $ciphertext . "<br><br>";

    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, 0, $iv, $tag);
    list($get_name, $get_mail) = explode('-', $original_plaintext);

    echo $get_name . "<br><br>";
    echo $get_mail . "<br><br>";
}

?>
