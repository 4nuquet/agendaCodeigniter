
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
	
	public function show()
	{
		$query = $this->db->query("SELECT * FROM tbl_person");
		return $query->result();
	}

	public function create($name, $lastname, $address, $phone, $dpto, $town){

		$data = array(
			'person_name' 		=> $name,
			'person_lastname '	=> $lastname,
			'person_address' 	=> $address,
			'person_phone' 		=> $phone,
			'person_dpto' 		=> $dpto,
			'person_town' 		=> $town
		);

		$this->db->insert('tbl_person', $data);
	}

	public function update($id, $name=NULL, $lastname=NULL, $address=NULL, $phone=NULL, $dpto=NULL, $town=NULL)
	{

		if ($name==NULL)
		{
		$query = $this->db->query(" SELECT * FROM tbl_person WHERE person_id = '$id' ");
		return $query->result();
		}
		else{
			$query = $this->db->query("UPDATE tbl_person SET person_name = '$name', person_lastname = '$lastname', person_address = '$address', person_phone = '$phone', person_dpto = '$dpto', person_town = '$town' WHERE person_id = '$id' ");
			if ($query) 
			{
				return true;

			}else
			{
				return false;
			}
		}
	}


	public function delete($id)
	{
		$this->db->delete('tbl_person', array('person_id' => $id));
	}

	public function search($type, $content)
	{
		switch ($type) {
			case 'Nombre':
				$query = $this->db->query("SELECT * FROM tbl_person WHERE person_name LIKE '$content' ");
				return $query->result();
				break;
			case 'Apellido':
				$query = $this->db->query("SELECT * FROM tbl_person WHERE person_lastname LIKE '$content' ");
				return $query->result();
				break;
				case 'Telefono':
					$query = $this->db->query("SELECT * FROM tbl_person WHERE person_phone LIKE '$content' ");
				return $query->result();
					break;
			
			default:
				# code...
				break;
		}
	}
}
?>