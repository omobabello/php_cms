<?php
defined('BASEPATH') or exit('No direct access allowed');

if( ! function_exists('load_view') ){
	function load_view($view, $data = NULL){
		$ci = &get_instance();
		$ci->load->view('header', $data);
		$ci->load->view($view);
		$ci->load->view('footer');
	}
}