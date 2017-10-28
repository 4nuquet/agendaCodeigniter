
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Main_model');
	}


	public function index($id)
	{
		$info["info"] = $this->Main_model->update($id);
		$this->load->view('edit', $info);
	}

	public function update($id)
	{
		$name 		= $this->input->post('name');
		$lastname 	= $this->input->post('lastname');
		$address 	= $this->input->post('address');
		$phone 		= $this->input->post('phone');
		$dpto 		= $this->input->post('dpto');
		$town 		= $this->input->post('town');

		$result = $this->Main_model->update($id, $name, $lastname, $address, $phone, $dpto, $town);

		if($result)
		{
			redirect('Find');
		}
		else
		{
			redirect(base_url());
		}	
	}
}
?>