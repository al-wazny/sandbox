<?php

class Pages extends Controller {

    private $pagesModel;

    private $authModel;

    public function __construct()
    {
        $this->pagesModel = $this->model('landingpageLoader');
        $this->authModel = $this->model('authentication');
    }

    public function index()
    {
        $data = [
            'page' => 'hello world',
        ];

        return $this->view('pages/landingpage', $data);
    }

    public function admin()
    {
        if (!$this->authModel->cookiesAllowed()) {
            $data['cookiesError'] = 'You need to accept the Cookies to use this';
            // display error message and cookie banner using <script> cookieConsent(); </script>
        }

        if (!$this->authModel->isLoggedIn()) {
            return $this->view('pages/adminLogin', $data);
        }

        $data = [
            'page' => 'hello world',
        ];

        return $this->view('pages/admin', $data);
    }

    public function checkAdminCredentials() 
    {
        
        header("location: /pages/admin");
    }
}