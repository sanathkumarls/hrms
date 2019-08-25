<?php
/**
 * Created by PhpStorm.
 * User: sanathls
 * Date: 2019-05-09
 * Time: 15:21
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Timesheet extends CI_Model {

    function add_timesheet($data)
    {
        $this->db->insert("timesheet",$data);
    }



}