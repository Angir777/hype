<?php

    /**
    * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
    */

    class db {

        /**
         * Connect
         */
        protected function connect() {

            $host = '';
            $db   = '';
            $user = '';
            $pass = '';
            $charset = 'utf8mb4';

            $options = [
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

            try {
                $conn = new \PDO($dsn, $user, $pass, $options);
                $conn->exec("set names utf8");
                return $conn;
            } catch (\PDOException $e) {
                header('Location: '.URL.'500');
            }
            
        }

        protected function encryptMethod (string $string, string $secretKey): string {
            $privateKey = 'AA74CDCC2BBRT935136HH7B63C27';
            $encryptMethod = "AES-256-CBC";
        
            $key = hash('sha256', $privateKey);
            $ivalue = substr(hash('sha256', $secretKey), 0, 16); // sha256 is hash_hmac_algo
            $result = openssl_encrypt($string, $encryptMethod, $key, 0, $ivalue);
            
            return base64_encode($result);
        }

        protected function decryptMethod (string $stringEncrypt, string $secretKey): string {
            $privateKey = 'AA74CDCC2BBRT935136HH7B63C27';
            $encryptMethod = "AES-256-CBC";

            $key = hash('sha256', $privateKey);
            $ivalue = substr(hash('sha256', $secretKey), 0, 16); // sha256 is hash_hmac_algo
            
            return openssl_decrypt(base64_decode($stringEncrypt), $encryptMethod, $key, 0, $ivalue);
        }

    }