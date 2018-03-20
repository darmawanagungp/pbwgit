<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_index extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_foto');
		$this->load->helper('url');
 
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function gallery()
	{
		$this->load->view('gallery');
	}

	public function about()
	{
		$this->load->view('about');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function formpage()
	{
		$this->load->view('formpage');
	}
}
