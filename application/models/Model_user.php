<?php 

class Model_user extends CI_Model {

	public function insertUser($data) {
		$this->db->insert('tbl_user', $data);

		if($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}

	function getLogin($email, $password) {
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where(array('email' => $email, 'password' => $password));

		$result = $this->db->get();

		return $result->row();
	}

	 public function logout($data, $email)  {
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $data);
    }


	

	


}