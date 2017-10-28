
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Main_model');
	}

	public function index()
	{
		$this->load->view('form');
	}

	public function create()
	{
		$name 		= $this->input->post('name');
		$lastname 	= $this->input->post('lastname');
		$address 	= $this->input->post('address');
		$phone 		= $this->input->post('phone');
		$dpto 		= $this->input->post('dpto');
		$town 		= $this->input->post('town');

		$this->Main_model->create($name, $lastname, $address, $phone, $dpto, $town);
		redirect('form');
	}


}
?>

