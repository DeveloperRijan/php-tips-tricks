<?php
$myText = "Hello PHP Encrypt Decrypt";

// Declare the cipher method
$ciphering = "AES-128-CTR";
     
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
       
// Your encryption key
$encryption_key = "afalkfjdlskafjjfalsdkfjklsdaf!8656-889";

// Non nullable Initialization Vector for decryption
$encryption_iv = '1234567891011121';
$decryption_iv = '1234567891011121';

//Encrypt the string
$encrypted = openssl_encrypt($myText, $ciphering,
            $encryption_key, $options, $encryption_iv); 

echo "Encrypted String : ".$encrypted."<br/>";
//output like
//Encrypted String : W39xvkXx8OsdDlQydxpDy0obdO4Bgwm81A==

//Decrypt
$decrypted = openssl_decrypt ($encrypted, $ciphering, 
        $encryption_key, $options, $decryption_iv);

echo "Decrypted String : ".$decrypted."<br/>";
//output like
//Decrypted String : Hello PHP Encrypt Decrypt

//Enjoy-- Happy Coding