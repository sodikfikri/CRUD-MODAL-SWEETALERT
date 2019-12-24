<?php

class Mahasiswa_model extends CI_Model
{

	public function getData($id)
	{
		$sql = "SELECT * FROM mahasiswa WHERE id = '".$id."' ";
		// var_dump($sql);die;
		$this->db->query($sql);
		// $this->db->bind('id', $id);
		return $this->db->single();
	}

}