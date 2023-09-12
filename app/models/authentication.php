<?php

class authentication {

    private $db;
    private $data;

    // public function __construct()
    // {
    //     $this->db = new Database();
    // }

    public function index() {
        return 'hello world';
    }

    public function checkAdminCredentials() 
    {
        
        if (!$this->cookiesAllowed()) {
            $data['error']['cookiesError'] = 'You need to accept the Cookies to do this';
            
            return $data;
        }

        if ($this->hasValidToken()) {
            // TODO check if the cookie token is the same as in the DB
        } else {
            $data['error']['invalidCredentials'] = true;
            
            return $data;
        }
        
        //TODO check username and password

        $token = $this->generateToken();
        // Set a cookie that expires in 1 hour (3600 seconds)
        setcookie('token', $token, time() + 3600, '/', '', true, true);
        // TODO update or set cookie inside DB

        return header("location: /pages/admin");
    }

    private function cookiesAllowed() {
        return (isset($_COOKIE['allowCookies']) && $_COOKIE['allowCookies'] === '1');
    }

    private function generateToken() {
        return bin2hex(openssl_random_pseudo_bytes(16));
    }

    private function hasValidToken() {
        return false;
        // check if cookie is set
        // check inside the DB if there is an entry that has the same value as the cookie token
    }

    private function updateDbToken($userId) {
        // pass
    }
}