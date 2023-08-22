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

    public function isLoggedIn() {
        return (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']);
    }

    public function cookiesAllowed() {
        return (isset($_COOKIE['allowCookies']) && $_COOKIE['allowCookies'] === '1');
    }
}