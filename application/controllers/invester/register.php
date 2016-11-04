<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller{

	function index(){
		$data['body'] = "invester/register";
		$data['title'] = "Invester::Register";
		$this->load->view("template/body",$data);
	}
}

?>