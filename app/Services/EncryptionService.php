<?php

namespace App\Services;

class EncryptionService
{
    protected $cipher = "aes-256-cbc";
    protected $key;

    public function __construct()
    {
        // Set your encryption key here. Make sure it's 32 bytes for AES-256.
        $this->key = config('app.encryption_key'); // Store this in your config file or .env
    }

    public function encrypt($data)
    {
        $ivlen = openssl_cipher_iv_length($this->cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext = openssl_encrypt($data, $this->cipher, $this->key, $options=0, $iv);
        return base64_encode($iv . $ciphertext);
    }

    public function decrypt($data)
    {
        $ivlen = openssl_cipher_iv_length($this->cipher);
        $data = base64_decode($data);
        $iv = substr($data, 0, $ivlen);
        $ciphertext = substr($data, $ivlen);
        return openssl_decrypt($ciphertext, $this->cipher, $this->key, $options=0, $iv);
    }
}
