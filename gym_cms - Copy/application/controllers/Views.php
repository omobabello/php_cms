<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Views extends CI_Controller
{

	public function index()
	{
		if ($this->_isLoggedIn()) {
			$this->socialLinks();
		}
	}

	public function socialLinks()
	{
		if ($this->_isLoggedIn()) {
			load_view('social', array(
				'title' => 'Social Links',
				'vue' => assets_url('vue/social.vue.js')
			));
		}
	}

	public function footerContents()
	{
		if ($this->_isLoggedIn()) {
			load_view('footer_content', array(
				'title' => 'Footer Content',
				'vue' => assets_url('vue/footer.vue.js')
			));
		}
	}

	public function serviceContents()
	{
		if ($this->_isLoggedIn()) {
			load_view('services', array(
				'title' => 'Services',
				'vue' => assets_url('vue/services.vue.js')
			));
		}
	}

	public function faqs()
	{
		if ($this->_isLoggedIn()) {
			load_view('faqs', array(
				'title' => 'FAQs',
				'vue' => assets_url('vue/faqs.vue.js'),
				'hasTable' => TRUE
			));
		}
	}

	public function pricing()
	{
		if ($this->_isLoggedIn()) {
			load_view('pricing', array(
				'title' => 'Pricing',
				'vue' => assets_url('vue/pricing.vue.js'),
				'hasTable' => TRUE
			));
		}
	}

	public function contacts()
	{
		if ($this->_isLoggedIn()) {
			load_view('contact', array(
				'title' => 'Contact',
				'vue' => assets_url('vue/contact.vue.js')
			));
		}
	}

	public function blog()
	{
		if ($this->_isLoggedIn()) {
			load_view('blog', array(
				'title' => 'Blog',
				'vue' => assets_url('vue/blog.vue.js')
			));
		}
	}

	public function about()
	{
		if ($this->_isLoggedIn()) {
			load_view('about', array(
				'title' => 'About Us',
				'vue' => assets_url('vue/about.vue.js')
			));
		}
	}

	public function newsLetter()
	{
		$this->load->database();
		if ($this->_isLoggedIn()) {
			load_view('newsletter', array(
				'title' => 'News Letter',
				'vue' => assets_url('vue/newsletter.vue.js'),
				'hasTable' => TRUE,
				'subs' => $this->db->get('newsletter')->result()
			));
		}
	}

	public function home_contents()
	{
		if ($this->_isLoggedIn()) {
			load_view('home_content', array(
				'title' => 'Home Content',
				'vue' => assets_url('vue/home-content.vue.js')
			));
		}
	}

	function _isLoggedIn()
	{
		$this->load->library('session');
		if ($this->session->has_userdata('loggedIn') && $this->session->loggedIn) {
			return TRUE;
		} else {
			$this->load->view('login');
		}
	}
}
