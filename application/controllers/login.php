<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 01/02/2016
 * Time: 17:36
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->helper(array('form'));
        $this->load->view('login_view');
    }

}
