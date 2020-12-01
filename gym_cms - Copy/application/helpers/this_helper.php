<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('load_view')) {
    function load_view($body, $data = NULL)
    {
        $here = &get_instance();
        $here->load->view('header', $data);
        $here->load->view($body);
        $here->load->view('footer');
    };
}
