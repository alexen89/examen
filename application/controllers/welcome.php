<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->helper('url');
		$datos['base_url'] = base_url()."application/";
		$datos['url'] = base_url();		
		$datos['script'] = '';
		$datos['class_ni']='active';
		$datos['class_re']='';
		$datos['class_con']='';
		$this->load->view('headers/header',$datos);
		$this->load->view('welcome_message',$datos);
		$this->load->view('footers/footer',$datos);
	}
}