<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model
{
    public $table = 'employees';

    public function get_all()
    {
        $this->db->select('*');
        $this->db->limit(20);
        $query = $this->db->get('employees');


        return $query->result_array();
    }
    
    public function get($id)
    {
        return $this->db->where('id', $id)->get($this->table)->row();
    }
  
    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->table);
        return $this->db->affected_rows();
    }

}

/* End of file project_model.php */
/* Location: ./application/models/project_model.php */