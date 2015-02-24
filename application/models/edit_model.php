<?php 
class Edit_model extends CI_Model{

	public function get_data($id){

		$this->db->where('id', $id);
		$data = $this->db->get('membership')->result_array();
		return $data;
	}




	public function delete_these($data){
		// $names = array('Frank', 'Todd', 'James');
		$this->db->where_in('id', $data);
		$data = $this->db->get('resources')->result_array();
		return $data;
	}

	public function do_delete_these($data){
		// $names = array('Frank', 'Todd', 'James');
		$this->db->where_in('id', $data);
		$this->db->delete('resources'); 
		
		
	}




	public function get_resource($id){
			$this->db->where('id', $id);
			$data = $this->db->get('resources')->result_array();
			return $data;
	}



	public function insert_edits($id, $data){
		$this->db->where('id', $id);
		$this->db->update('resources', $data);
	}



	public function insert_new($data){
		$this->db->insert('resources', $data);
	}













}
?>