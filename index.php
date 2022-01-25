<?php


$name = "Ferdous Ahmed Khan";
$email = "ferdous@nassa.com.bd";

$plaintext = $name."-".$email."-";


$cipher = "aes-128-gcm";
$key = "404";

if (in_array($cipher, openssl_get_cipher_methods()))
{ 
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
    echo $ciphertext."<br><br>";
}


	$key = "404";

	$original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
    echo $original_plaintext."<br><br>";


	$arr1 = str_split($original_plaintext);


	print_r($arr1);
 	
 	echo "<br><br>";
 
	for($i = 0; $i < count($arr1); $i++) 
		{

			if($arr1[$i] == "-")
			{	
				break;
				$name = $name."".$arr1[$i];
			}
		}


	for($i; $i < count($arr1); $i++) 
		{
			if($arr1[$i] == "-")
			{	
				break;
				$email = $email."".$arr1[$i];

			} 
		}


		echo $name."<br>";	
		echo $email;	

?>