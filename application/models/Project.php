<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Model {

    function add_project($data)
    {
        $this->db->insert("project",$data);
    }

    function selectproject($pid)
    {
        $this->db->select('*');
        $this->db->where('Id',$pid);
        return $this->db->get("project");
    }

    function selectclass()
    {
        $class = $this->db->get("msclass");
        return $class;
    }

    function  getpid($pcode)
    {
        $this->db->select('*');
        $this->db->where('ProjectCode',$pcode);
        $result=$this->db->get("project");
       foreach ($result->result() as $row)
           return $row->Id;
    }

    function  check_pcode($pcode)
    {
        $this->db->select('*');
        $this->db->where('ProjectCode',$pcode);
        $result=$this->db->get("project");
        if($result->num_rows() > 0)
        {
            return false;//false means already exists
        }
        else
            return true;
    }

    function  getpcode($pid)
    {
        $this->db->select('*');
        $this->db->where('Id',$pid);
        $result=$this->db->get("project");
        foreach ($result->result() as $row)
            return $row->ProjectCode;
    }

    function update_project($data,$id)
    {
        $this->db->where('Id',$id);
        $this->db->update("project",$data);
    }

}