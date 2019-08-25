<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllocatedHours extends CI_Model {

    public function getallocated($pid)
    {
        $this->db->select('*');
        $this->db->where('ProjectId',$pid);
        return $this->db->get('allocatedhours');
    }

    public function allocate($data)
    {
        $this->db->insert('allocatedhours',$data);
    }

    public function getprojectid($deptid)
    {
        $this->db->select('*');
        $this->db->where('DepartmentId',$deptid);
        return $this->db->get('allocatedhours');
    }

    function update_hours($data,$id)
    {
        $this->db->where('Id',$id);
        $this->db->update("allocatedhours",$data);
    }

    function  delete_hours($id)
    {
        $this->db->where("Id", $id);
        $this->db->delete("allocatedhours");
    }
}