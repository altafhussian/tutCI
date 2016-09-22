<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

function __construct()
{
	parent::__construct();
}
 
public function index()
{
	$this->load->model('main_model');
	$data['login'] = $this->main_model->index();
	$this->load->view('main_view',$data);
}

}
?>
