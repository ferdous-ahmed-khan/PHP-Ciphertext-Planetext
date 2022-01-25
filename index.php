<?php


$name = "Ferdous Ahmed Khan";
$email = "ferdous@nassa.com.bd";

$plaintext = $name."-".$email;


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
 



/*

	for($i = 0; $i < count($arr1); $i++) 
		{

			if($arr1[$i] == "-")
			{	
				break;
				$name = $name."".$arr1[$i];
			}
		}



	$temp = count($arr1) + $i;


	echo "Temp value: ".$temp[1]."<br><br>";



	for($i = $i + 1; $i < $temp; $i++) 
		{
				$email = $email."".$temp[$i];
		}


		echo $name."<br>";	
		echo $email;	
*/


	 
 

		list($get_name, $get_mail) = explode('-', $original_plaintext);

		echo $get_name."<br><br>";
		echo $get_mail."<br><br>";


 

?>