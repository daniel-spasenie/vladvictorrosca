<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->library('session');
	}

	public function home() {
		$this->load->view('home');
	}
	public function services() {
		$this->load->view('services');
		}
	public function seminars() {
		$this->load->view('seminars');
	}
	public function contact() {
		$this->load->view('contact');
	}
	public function about() {
		$this->load->view('about');
	}
	public function pricing() {
		$this->load->view('contact');
	}
}
