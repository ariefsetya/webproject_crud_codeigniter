<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}
	public function update_data($table,$data,$where)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
		return $this->db->affected_rows();
	}
	public function delete_data($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
		return $this->db->affected_rows();
	}
	public function view_data($table,$where)
	{
		$this->db->where($where);
		return $this->db->get($table)->result();
	}
	public function view_data_one($table,$where)
	{
		$this->db->where($where);
		return $this->db->get($table)->row();
	}
}
