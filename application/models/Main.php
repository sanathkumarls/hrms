<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model {

	function can_login($useremail,$userpassword)
	{
		$this->db->where('pemail',$useremail);
		$this->db->where('password',$userpassword);
		$query = $this->db->get('employee');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function fetch_data($query)
 	{
		$this->db->like('fname', $query);
		//$this->db->where('estatus',1);
		$this->db->or_like('mname', $query);
	  $this->db->or_like('lname', $query);
		
		$query = $this->db->get('employee');
		if($query->num_rows() > 0)
		{
			foreach($query->result_array() as $row)
			{
				$output[] = array(
					'name'  => $row["fname"]." ".$row["mname"]." ".$row["lname"]
    			);
   			}
	  		echo json_encode($output);
  		}
 	}

    function fetch_project_data($query)
    {
        $this->db->like('ProjectCode', $query);
        //$this->db->where('Status',1);
        $query = $this->db->get('project');
        if($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row)
            {
                $output[] = array(
                    'projectname'  => $row["ProjectCode"]
                );
            }
            echo json_encode($output);
        }
    }
	
	function username($email)
	{
		$this->db->select('*');
        $this->db->from("employee");
        $this->db->where("pemail",$email);
        $query=$this->db->get();
		foreach ($query->result() as $row)
		{
			return $row->fname;
		}
	}

    function userid($email)
    {
        $this->db->select('*');
        $this->db->from("employee");
        $this->db->where("pemail",$email);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            return $row->id;
        }
    }

    function getdeptid($uid)
    {
        $this->db->select('*');
        $this->db->from("employee");
        $this->db->where("id",$uid);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            return $row->department;
        }
    }
	
	function role($email)
	{
		$this->db->select('*');
        $this->db->from("employee");
        $this->db->where("pemail",$email);
        $query=$this->db->get();
		foreach ($query->result() as $row)
		{
			return $row->role;
		}
		
	}
	
	function roleid($rolename)
	{
		$this->db->select('*');
        $this->db->from("role");
        $this->db->where("name",$rolename);
        $query=$this->db->get();
		foreach ($query->result() as $row)
		{
			return $row->id;
		}
		
	}
	
	function getpassword($email)
	{
		$this->db->select('*');
        $this->db->from("employee");
        $this->db->where("pemail",$email);
        $query=$this->db->get();
		foreach ($query->result() as $row)
		{
			return $row->password;
		}
		
	}
	
	function rolename($role)
	{
		$this->db->select('*');
        $this->db->from("role");
        $this->db->where("id",$role);
		$query=$this->db->get();
		foreach ($query->result() as $row)
		{
			return $row->name;
		}
		
	}
	
	
	
	function selectrolename()
	{
		$this->db->select('*');
        $this->db->from("role");
			return $query=$this->db->get();
	}
	
	function rolemodify($role)
	{
		$this->db->select('*');
        $this->db->from("role");
        $this->db->where("id",$role);
		$query=$this->db->get();
		foreach ($query->result() as $row)
		{
			return $row->modify_employee;
		}
		
	}
	
	function roleadd($role)
	{
		$this->db->select('*');
        $this->db->from("role");
        $this->db->where("id",$role);
		$query=$this->db->get();
		foreach ($query->result() as $row)
		{
			return $row->add_employee;
		}
		
	}
	
	function verifymail($email)
	{
		$this->db->where('pemail',$email);
		$query=$this->db->get('employee');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function change_pass($mail,$pass)
	{
		$this->db->where('pemail',$mail);
		$this->db->update("employee",$pass);
	}
	
	function selectemployees()
	{
		$employees = $this->db->get("employee");
		return $employees;
	}
	
	function selectemployee($email)
	{
		$this->db->where('pemail',$email);
		$employee = $this->db->get("employee");
		return $employee;
	}
	
	function selectcountry()
	{
		$employees = $this->db->get("country");
		return $employees;
	}

    function selectdepartment()
    {
        $department = $this->db->get("msdepartment");
        return $department;
    }

	function selectdesignation()
	{
		$designation = $this->db->get("msdesignation");
		return $designation;
	}
	
	function add_employee($data)
	{
		$this->db->insert("employee",$data);
	}
	
	function searchresult($fname,$lname)
	{
		
		$this->db->like('fname',$fname);
		$this->db->or_like('lname',$lname);
		//$this->db->where('estatus',1);
		$result = $this->db->get("employee");
		return $result;
	}
	
	function update_employee($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update("employee",$data);
	}


    function getdepartmentname($id)
    {
        $this->db->select('*');
        $this->db->from("msdepartment");
        $this->db->where("DeptId",$id);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            return $row->DeptName;
        }

    }

    function getclassname($id)
    {
        $this->db->select('*');
        $this->db->from("msclass");
        $this->db->where("ClassId",$id);
        $query=$this->db->get();
        foreach ($query->result() as $row)
        {
            return $row->ClassName;
        }

    }

    function selectremdepartment($ids)
    {
        $this->db->select("*");
        $this->db->from('msdepartment');
        $this->db->where_not_in('DeptId', $ids);
        $department = $this->db->get();
        return $department;
    }
	
}
