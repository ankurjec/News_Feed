<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$url = "https://techcrunch.com/wp-json/wp/v2/posts?per_page=50&context=embed";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		// print_r($result);
		curl_close($ch);
		$data['news'] = json_decode($result, true);
		$this->load->view('welcome_message', $data);
	}
}
