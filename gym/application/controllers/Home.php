<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		load_view('main', array(
			'tests' => $this->db->get('testimonials')->result(),
			'grids' => $this->db->get('home_grid_image')->result(),
			'accords' => $this->db->get('accordions')->result(),
			'left' => $this->db->get('home_s1_left')->row(),
			'banners' => $this->db->where('page', 'home-page')->get('banners')->result(),
			'footer' => $this->db->get('footer_contents')->row(),
			'contact' => $this->db->get('contact')->row(),
			'socials' => $this->db->get('social_links')->row()
		));
	}


	public function services()
	{
		load_view('services', array(
			'banner' => $this->db->where('page', 'service')->get('banners')->row(),
			'services' => $this->db->get('services')->result(),
			'footer' => $this->db->get('footer_contents')->row(),
			'contact' => $this->db->get('contact')->row(),
			'socials' => $this->db->get('social_links')->row()
		));
	}

	public function about_us()
	{
		load_view('about_us', array(
			'banner' => $this->db->where('page', 'about')->get('banners')->row(),
			'logos' => $this->db->where('section', 'sponsor-logo')->get('about')->result(),
			'sec1' => $this->db->where('section', 'section-one')->get('about')->row(),
			'sec2' => $this->db->where('section', 'section-two')->get('about')->row(),
			'sec3' => $this->db->where('section', 'section-three')->get('about')->row(),
			'sec4' => $this->db->where('section', 'section-four')->get('about')->row(),
			'footer' => $this->db->get('footer_contents')->row(),
			'contact' => $this->db->get('contact')->row(),
			'socials' => $this->db->get('social_links')->row()
		));
	}

	public function faq()
	{
		load_view('faq', array(
			'faqs' => $this->db->get('faqs')->result(),
			'banner' => $this->db->where('page', 'faq')->get('banners')->row(),
			'footer' => $this->db->get('footer_contents')->row(),
			'contact' => $this->db->get('contact')->row(),
			'socials' => $this->db->get('social_links')->row()
		));
	}

	public function blog()
	{
		// load_view('blog');
		$blog = $this->db->get('blog')->row();
		header("Location: {$blog->blog_link}");
	}
	public function contact()
	{
		load_view('contact', array(
			'contact' => $this->db->get('contact')->row(),
			'banner' => $this->db->where('page', 'contact')->get('banners')->row(),
			'footer' => $this->db->get('footer_contents')->row(),
			'contact' => $this->db->get('contact')->row(),
			'socials' => $this->db->get('social_links')->row()
		));
	}

	public function send_mail()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', "trim|regex_match[/^([a-zA-Z'-\.]+\s)*[\sa-zA-Z'-.]+$/]");
		$this->form_validation->set_rules('subject', 'Subject', "trim|regex_match[/^([a-zA-Z'-\.]+\s)*[\sa-zA-Z'-.]+$/]");
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|min_length[10]|regex_match[/[a-zA-Z\s]+/]');
		$this->form_validation->set_message('regex_match', 'Invalid %s provided');

		if ($this->form_validation->run() === FALSE) {
			load_view('contact');
		} else {
			$message = "Sent By: {$this->input->post('name')} /n 
						Contact: {$this->input->post('phone')} /n 
						/n/{$this->input->post('message')}";

			$this->load->library('email');
			$this->email->from($this->input->post('email'), $this->input->post('name'))
				->to('contact@cobaltng.com')
				->subject($this->input->post('subject'))
				->message($message)
				->send();
			$data['message'] = '<p class="alert alert-success">MEssage received, Thanks for contacting</p>';
			load_view('contact', $data);
		}
	}

	public function book()
	{
		load_view('book');
	}


	public function pricing()
	{
		$pricing = $this->db->get('pricing')->result();
		$articles = $this->db->get('pricing_article')->result();
		$col = "col-md-" . round(12 / count($pricing));
		$a_col = 'col-lg-' . round(12 / count($articles));

		load_view('pricing', array(
			'prices' => $pricing,
			'banner' => $this->db->where('page', 'pricing')->get('banners')->row(),
			'articles' => $articles,
			'col' => $col,
			'a_col' => $a_col,
			'footer' => $this->db->get('footer_contents')->row(),
			'contact' => $this->db->get('contact')->row(),
			'socials' => $this->db->get('social_links')->row()
		));
	}
}
