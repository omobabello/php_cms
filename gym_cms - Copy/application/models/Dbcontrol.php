<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dbcontrol extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
}
