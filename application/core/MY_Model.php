<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends \CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
}