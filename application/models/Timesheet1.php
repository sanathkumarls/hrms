<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Timesheet1 extends CI_Model {

	function add_timesheet($data)
	{
		$this->db->insert("timesheet1",$data);
	}

	function  show()
	{
		$this->db->select('*');
		$res=$this->db->get('timesheet1');
		//$data=$res->result();
		foreach ($res->result() as $row)
		{
			print_r(json_decode($row->Monday,true));
			print_r(json_decode($row->Monday)->date);//working
			echo "<br>";
			print_r(json_decode($row->Monday,false));
			echo "<br>";
		}

	}


}
