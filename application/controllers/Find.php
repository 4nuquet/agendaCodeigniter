
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Main_model');
	}

	 public function index()
	 {

	 	$data["data"] = $this->Main_model->show();
	 	$this->load->view('find', $data);
	 	
	}

	public function delete($id)
	{
		$this->Main_model->delete($id);
		redirect('Find');
	}

	public function search()
	{
		$type = $this->input->post('typeSearch');
		$content = $this->input->post('contentSearch');


		$data["data"] = $this->Main_model->search($type, $content);

		$this->load->view('find', $data);
	}


}