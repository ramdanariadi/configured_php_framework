<?php 
class Users extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        echo 'test';
        if($this->ion_auth->logged_in()){
            
        }
    }
}
?>