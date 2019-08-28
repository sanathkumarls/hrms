<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	
	public function index()
	{
		
		if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
		{
			
			
			$this->load->model("Main");
			$useremail = $this->session->userdata('useremail');
			$can=$this->Main->verifymail($useremail);
			$password=$this->Main->getpassword($useremail);
			if($password=="a899731ab60e5ffde40c3994954caa680a9ae48533781ec10fa8ab6d35279fb9")
			{
				 $session_data = array(
					'changepass' => "true"
					 );
				$this->session->set_userdata($session_data);
				redirect(base_url().'home/reset_pass');
			}
			if($can)
			{
				$userrole = $this->Main->role($useremail);
				$rolename = $this->Main->rolename($userrole);
				$rolemodify = $this->Main->rolemodify($userrole);
				$roleadd = $this->Main->roleadd($userrole);
				$role = $this->Main->roleid($rolename);
				$session_data = array(
					'rolename' => $rolename,
					'rolemodify' => $rolemodify,
					'userrole' => $userrole,
					'roleadd' => $roleadd,
					'role' => $role
				);
				$this->session->set_userdata($session_data);
				$data['rolename'] =$this->Main->selectrolename();
				$data['country'] =$this->Main->selectcountry();
                $data['departments'] =$this->Main->selectdepartment();
				$data['employee'] =$this->Main->selectemployee($useremail);

				$this->load->view('front/home/header');
				$this->load->view('front/home/home',$data);
				//$this->load->view('front/home/footer'); 	
				
			}
			else
			{
				redirect(base_url().'home/login');
			}
			
		}
		else
		{
			redirect(base_url().'home/login');
		}
		
		
	}
	
	
	public function fetch()
 	{
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $this->load->model('Main');
            echo $this->Main->fetch_data($this->uri->segment(3));
        }
        else
            redirect(base_url());

	}

    public function fetchproject()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $this->load->model('Main');
            echo $this->Main->fetch_project_data($this->uri->segment(3));
        }
        else
            redirect(base_url());

    }
	
	//login start
	public function login()
	{
		if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
		{
			redirect(base_url());
		}
		else
		{
		$this->load->view('front/header');
		$this->load->view('front/login');
		$this->load->view('front/footer');	
		}
		
	}
	public function login_validation()
	{
		$this->form_validation->set_rules('useremail', 'Email' , 'required');
		$this->form_validation->set_rules('userpassword', 'Password' , 'required');
		if($this->form_validation->run())
		{
			$salt = "sanath";
			$useremail = $this->input->post('useremail');
			$pass = $this->input->post('userpassword');
			
			$userpassword = hash("sha256",$pass.$salt);
			$this->load->model("Main");
			if($this->Main->can_login($useremail,$userpassword))
			{
				$username = $this->Main->username($useremail);
				$userrole = $this->Main->role($useremail);
				$rolename = $this->Main->rolename($userrole);
				$rolemodify = $this->Main->rolemodify($userrole);
				$roleadd = $this->Main->roleadd($userrole);
				$uid =$this->Main->userid($useremail);
				 $session_data = array(
					'useremail' => $useremail,
					 'username' => $username,
					 'userrole' => $userrole,
					 'rolename' => $rolename,
					 'rolemodify' => $rolemodify,
					 'roleadd' => $roleadd,
                     'uid' => $uid
				);
				$this->session->set_userdata($session_data);
				redirect(base_url());
			}
			else
			{
				$this->session->set_flashdata('error','Invalid Username Or Password');
				redirect(base_url().'home/login');
			}
		}
		else
		{
			$this->login();
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('useremail','username','userrole','rolename','rolemodify','roleadd','otp','mail','role','uid');
		redirect(base_url());
	}
	//login end
	public function forgot_pass()
	{
		$this->load->view('front/header');
		$this->load->view('front/forgot_pass');
		$this->load->view('front/footer');
	}
	
	public function otp()
	{
		//verify mail and allow
		$mail=$this->input->post('email');
		$this->load->model('Main');
		$can=$this->Main->verifymail($mail);
		if($can)
		{
			$otp=rand(10000,100000);
			$session_data = array(
					 'otp' => $otp,
					'mail'=> $mail,
					'useremail' =>$mail
				);
			$this->session->set_userdata($session_data);
			$this->mail_otp($mail,$otp);
			redirect(base_url().'home/enter_otp');
		}
		else
		{
			redirect(base_url().'home/nouser');
		}
	}
	
	public function mail_otp($mail,$otp)
	{
		if($this->session->userdata('otp') != '' && $this->session->userdata('useremail') != '' )
		{
			$from="admin@yappa.in";
			$name="Password Reset";
			$to=$mail;
			$subject="Security Code For Changing Password";
			$body="Your Security Code For Resetting Password Is : ".$otp;
			//mail
			$config=array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.yappa.in',
			'smtp_port' => '587',
			'smtp_user' => 'admin@yappa.in',
			'smtp_pass' => 'Yappa@admin',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
			);
			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			$this->email->from($from,$name);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($body);
			if($this->email->send())
			{
				//
			}
		}
		else
		{
			$this->login();
		}
	}
	
	public function enter_otp()
	{
		if($this->session->userdata('otp') != '' && $this->session->userdata('useremail') != '')
		{
			
			echo("<script>alert('Otp Sent To Mail')</script>");
			$this->load->view('front/header');
			$this->load->view('front/enter_otp');
			$this->load->view('front/footer');
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function nouser()
	{
		echo("<script>alert('Email Does Not Exist')</script>");
		$this->login();
	}
	
	public function reset_pass()
	{
		
		if($this->session->userdata('useremail') != '')
		{
				$session_data = array(
					 'otp' => 1
				);
				$this->session->set_userdata($session_data);
				$this->load->view('front/header');
				$this->load->view('front/reset_pass');
				$this->load->view('front/footer');
			
		}
		elseif($this->session->userdata('otp') != '' && $this->session->userdata('useremail') != '')
		{
			$entered_otp=$this->input->post('otp');
			$otp=$this->session->userdata('otp');
			if($entered_otp==$otp)
			{
				$session_data = array(
					 'otp' => 1
				);
				$this->session->set_userdata($session_data);
				$this->load->view('front/header');
				$this->load->view('front/reset_pass');
				$this->load->view('front/footer');
			}
			else
			{
				echo("<script>alert('Otp Does Not Match')</script>");
				$this->enter_otp();
			}
		}
		else
		{
			$this->login();
		}
	}
	
	public function change_pass()
	{
		if($this->session->userdata('otp') == 1 && $this->session->userdata('useremail') != '')
		{
			$pass=$this->input->post('password');
			$confirmpass=$this->input->post('confirmpassword');
			if($pass==$confirmpass)
			{
				$salt="sanath";
				$password=array(
				'password'=>hash("sha256",$pass.$salt)
				);
				$mail=$this->session->userdata('useremail');
				$this->load->model('Main');
				$this->Main->change_pass($mail,$password);
				$this->session->unset_userdata('otp','mail','changepass');
				echo("<script>alert('Password Changed Successfully')</script>");
				$this->login();
			}
			else
			{
				echo("<script>alert('Password Does Not Match. Try Again')</script>");
				if($this->session->userdata('changepass') == 'true')
				{
					$this->reset_pass();
				}
				else
				$this->forgot_pass();
			}
			
		}
		else
		{
			$this->login();
		}
	}
	
	public function employee_add()
	{
		if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
		{
			$this->load->model('Main');
			$data['rolename'] =$this->Main->selectrolename();
			$data['employees'] =$this->Main->selectemployees();
			$data['country'] =$this->Main->selectcountry();
            $data['departments'] =$this->Main->selectdepartment();
			$this->load->view('front/home/header',$data);
			$this->load->view('front/home/add_employee');
		}
		else
		{
			redirect(base_url());
		}
	}
	
	
	public function add_employee()
	{
		if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
		{
			$this->load->model('Main');
			$data = array(
			'role' => $this->input->post('role'),
			'employee_id'=> $this->input->post('employee_id'),
			'initial' => $this->input->post('initial'),
			'fname' => $this->input->post('fname'),
			'mname' =>$this->input->post('mname'),
			'lname' => $this->input->post('lname'),
			'mstatus' => $this->input->post('mstatus'),
			'nationality' => $this->input->post('nationality'),
			'dob' => $this->input->post('dob'),
			'gender' => $this->input->post('gender'),
			'pnumber' => $this->input->post('pnumber'),
			'pemail' => $this->input->post('pemail'),
			'snumber' => $this->input->post('snumber'),
			'semail' => $this->input->post('semail'),
			'address' => $this->input->post('address'),
			'ehistory' => $this->input->post('ehistory'),
			'aadhar' => $this->input->post('aadhar'),
			'acnumber' => $this->input->post('acnumber'),
			'pan' => $this->input->post('pan'),
			'passport' => $this->input->post('passport'),
			'doj' => $this->input->post('doj'),
			'estatus' => $this->input->post('estatus'),
			'etype' => $this->input->post('etype'),
			'designation' => $this->input->post('designation'),
			'department' => $this->input->post('department'),
			'billing' => $this->input->post('billing'),
			'minumber' => $this->input->post('minumber')
			);
			$this->Main->add_employee($data);
			redirect(base_url()."home/employeeadded");
		}
		else
		{
			redirect(base_url());
		}
	}
	
	public function employeeadded()
	{
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
        {
            echo "<script>alert('Employee Added Successfully')</script>";
            $this->employee_add();
        }
        else
            redirect(base_url());

	}
	
	public function search()
	{
		if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
		{
			$fullname = $this->input->post('name');
			if($fullname != '' && $fullname != ' ')
			{
				$token = strtok($fullname, " ");
				$i=0;
				while ($token !== false)
				{
					$a[$i]=$token;
					$i++;
					$token = strtok(" ");
				}
				$fname = '';
				$lname = '';
				if($fullname != '')
				{
					$fname = $a[0];
					$lname = $a[--$i];
				}
			
				$this->load->model('Main');
				$data['rolename'] =$this->Main->selectrolename();
				$data['country'] =$this->Main->selectcountry();
                $data['departments'] =$this->Main->selectdepartment();
				$data['employee'] =$this->Main->searchresult($fname,$lname);
				$this->load->view('front/home/header');
				$this->load->view('front/home/home',$data);
			}
			else
				redirect(base_url());
			
		}
	}
	
	public function update_employee($para='')
	{
		if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') == 'Y' && $this->session->userdata('roleadd') != '')
		{
		    if($para !='')
            {
                $this->load->model('Main');
                $data = array(
                    'role' => $this->input->post('role'),
                    'initial' => $this->input->post('initial'),
                    'fname' => $this->input->post('fname'),
                    'mname' =>$this->input->post('mname'),
                    'lname' => $this->input->post('lname'),
                    'mstatus' => $this->input->post('mstatus'),
                    'nationality' => $this->input->post('nationality'),
                    'dob' => $this->input->post('dob'),
                    'gender' => $this->input->post('gender'),
                    'pnumber' => $this->input->post('pnumber'),
                    'snumber' => $this->input->post('snumber'),
                    'semail' => $this->input->post('semail'),
                    'address' => $this->input->post('address'),
                    'ehistory' => $this->input->post('ehistory'),
                    'aadhar' => $this->input->post('aadhar'),
                    'acnumber' => $this->input->post('acnumber'),
                    'pan' => $this->input->post('pan'),
                    'passport' => $this->input->post('passport'),
                    'doj' => $this->input->post('doj'),
                    'estatus' => $this->input->post('estatus'),
                    'etype' => $this->input->post('etype'),
                    'designation' => $this->input->post('designation'),
                    'department' => $this->input->post('department'),
                    'billing' => $this->input->post('billing'),
                    'minumber' => $this->input->post('minumber')
                );
                $this->Main->update_employee($data,$para);
                redirect(base_url()."home/employeeupdated");
            }
            else
            {
                redirect(base_url());
            }

		}
		else
		{
			redirect(base_url());
		}
	}
	
	public function employeeupdated()
	{
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
        {
            echo "<script>alert('Employee Details Updated Successfully')</script>";
            $this->index();
        }
        else
            redirect(base_url());

	}
	
	public function project_profile($pid='')
	{
		if($pid == '')
        {
            if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
            {

                $uid=$this->session->userdata('uid');
                $this->load->model('Main');
                $deptid=$this->Main->getdeptid($uid);
                $this->load->model('AllocatedHours');
                $data['projectid'] = $this->AllocatedHours->getprojectid($deptid);   //use projectid to get no.
                $i=1;
                foreach ($data['projectid']->result() as $row)
                {
                    $data['pid']=$row->ProjectId;
                    $i++;
                }
               // echo "<script>alert('$i')</script>";
                $this->load->model('Project');
                $data['class'] =$this->Project->selectclass();
                $this->load->view('front/home/header');
                $this->load->view('front/home/project_profile',$data);
            }
            else
                redirect(base_url());
        }
		else
        {
            if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' )
            {
                $this->load->model('Project');
                $data['class'] =$this->Project->selectclass();
                $data['project'] =$this->Project->selectproject($pid);
                $data['pid']=$pid;
                $data['pcode']=$this->Project->getpcode($pid);
                $this->load->model('AllocatedHours');
                $data['allocatedhours']=$this->AllocatedHours->getallocated($pid);
                $deptid=array();
                foreach ($data['allocatedhours']->result() as $row)
                {
                    $deptid[]=$row->DepartmentId;
                }
                $id = implode(",",$deptid);
                $ids = explode(",", $id);
                $this->load->model('Main');
                $data['departments'] =$this->Main->selectremdepartment($ids);
                $this->load->view('front/home/header');
                $this->load->view('front/home/allocate',$data);
            }
            else
                redirect(base_url());
        }
	}
	
	public function create_project()
	{
		if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
		{
            $this->load->model('Project');
            $data['class'] =$this->Project->selectclass();
			$this->load->view('front/home/header');
			$this->load->view('front/home/create_project',$data);
		}
		else
			redirect(base_url());
	}


    public function add_project()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
        {
            $this->load->model('Project');
            $pcode=$this->input->post('ProjectCode');
            $pdescription=$this->input->post('ProjectDescription');
            $oem=$this->input->post('Oem');
            $class=$this->input->post('Class');
            $partcategory=$this->input->post('PartCategory');
            $division=$this->input->post('Division');
            $contract=$this->input->post('Contact');
            $sdate=$this->input->post('StartDate');
            $edate=$this->input->post('EndDate');
            $status=$this->input->post('Status');
            if($pcode!='' && $pdescription!='' && $oem!='' && $class!='' && $partcategory!='' && $division!='' && $contract!='' && $sdate!='' && $edate!='' && $status!='')
            {
                if($this->Project->check_pcode($pcode))
                {
                    $data = array(
                        'ProjectCode'=> $pcode,
                        'ProjectDescription' => $pdescription,
                        'Oem' => $oem,
                        'Class' => $class,
                        'PartCategory'=> $partcategory,
                        'Division' => $division,
                        'Contact' => $contract,
                        'StartDate' => $sdate,
                        'EndDate' => $edate,
                        'Status' => $status
                    );
                    $this->Project->add_project($data);
                    redirect(base_url()."home/projectadded/$pcode");
                }
                else
                    redirect(base_url()."home/project_exists");

            }
            else
                redirect(base_url()."home/create_project");



        }
        else
        {
            redirect(base_url());
        }
    }

    public function projectadded($pcode='')
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
        {
             echo "<script>alert('Project Created Successfully')</script>";
             //get pid and pass
            $this->load->model('Project');
            $pid=$this->Project->getpid($pcode);
             $this->project_profile($pid);
        }
        else
        {
            redirect(base_url());
        }
    }

    public function project_exists()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
        {
            echo "<script>alert('Project Code Already Exists')</script>";
            $this->create_project();
        }
        else
        {
            redirect(base_url());
        }
    }
	


    public function allocate_hours($pid='',$pcode='')
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
        {
            $this->load->model('AllocatedHours');
            $data = array(
                'ProjectId' => $pid,
                'ProjectCode'=> $pcode,
                'DepartmentId' => $this->input->post('DepartmentId'),
                'AllocatedHours' => $this->input->post('AllocatedHours'),
                'AdditionalHours' => $this->input->post('AdditionalHours')
            );
            $this->AllocatedHours->allocate($data);
            redirect(base_url()."home/project_profile/$pid");
        }
        else
            redirect(base_url());
    }


    public function update_project($para='',$page='')
    {
        if ($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') == 'Y' && $this->session->userdata('roleadd') != '')
        {
            if ($para != '')
            {
                $this->load->model('Project');
                $data = array(
                    'ProjectCode'=> $this->input->post('ProjectCode'.$para),
                    'ProjectDescription' => $this->input->post('ProjectDescription'.$para),
                    'Oem' => $this->input->post('Oem'.$para),
                    'Class' => $this->input->post('Class'.$para),
                    'PartCategory'=> $this->input->post('PartCategory'.$para),
                    'Division' => $this->input->post('Division'.$para),
                    'Contact' => $this->input->post('Contact'.$para),
                    'StartDate' => $this->input->post('StartDate'.$para),
                    'EndDate' => $this->input->post('EndDate'.$para),
                    'Status' => $this->input->post('Status'.$para)
                );
                $this->Project->update_project($data,$para);
                if($page==1)
                redirect(base_url()."home/project_profile");
                if ($page==2)
                    redirect(base_url()."home/project_profile/$para");

            }
            else
                redirect(base_url());

        }
        else
            redirect(base_url());

    }

    public function update_hours($para='',$page='')
    {
        if ($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $role=$this->session->userdata('userrole');
            if($role== 1 || $role == 2 )
            {
                if ($para != '')
                {
                    $this->load->model('AllocatedHours');
                    $data = array(
                        'AdditionalHours' => $this->input->post('AdditionalHours'.$para)
                    );
                    $this->AllocatedHours->update_hours($data,$para);
                    redirect(base_url()."home/project_profile/$page");

                }
                else
                    redirect(base_url());
            }
            else
                redirect(base_url());


        }
        else
            redirect(base_url());

    }

    public function delete_hours($id='',$page='')
    {
        if ($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {

                $role=$this->session->userdata('userrole');
                if($role== 1 || $role == 2 )
                {
                        if ($id != '')
                        {
                            $this->load->model('AllocatedHours');
                            $this->AllocatedHours->delete_hours($id);
                            redirect(base_url()."home/project_profile/$page");

                        }
                        else
                            redirect(base_url());
                }
                else
                    redirect(base_url());



        }
        else
            redirect(base_url());

    }

    public function search_project()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $pcode=$this->input->post('projectname');
            $this->load->model('Project');
            $pid=$this->Project->getpid($pcode);
            if($pid=='')
            echo "<script>alert('Project Does Not Exist')</script>";
            $this->project_profile($pid);
        }
        else
            redirect(base_url());

    }

    public  function mytime()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $uid=$this->session->userdata('uid');
            $this->load->model('Main');
            $deptid=$this->Main->getdeptid($uid);
            $this->load->model('AllocatedHours');
            $data['projectid'] = $this->AllocatedHours->getprojectid($deptid);   //use projectid to get no.
            $i=1;
            foreach ($data['projectid']->result() as $row)
            {
                $data['pid']=$row->ProjectId;
                $i++;
            }
            $this->load->model('Project');
            $this->load->view('front/home/header');
            $this->load->view('front/home/mytime',$data);
        }
        else
            redirect(base_url());
    }

    public  function myleave()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $this->load->view('front/home/header');
            //$this->load->view('front/home/myleave');
        }
        else
            redirect(base_url());
    }

    public  function attendance()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $this->load->view('front/home/header');
            //$this->load->view('front/home/attendance');
        }
        else
            redirect(base_url());
    }

    public  function approvals()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $this->load->view('front/home/header');
            //$this->load->view('front/home/approvals');
        }
        else
            redirect(base_url());
    }

    public  function reports()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $this->load->view('front/home/header');
            //$this->load->view('front/home/reports');
        }
        else
            redirect(base_url());
    }

    public  function save_timesheet()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
        {
            $pcode=$this->input->post('pcode');
            $oem=$this->input->post('oem');
            $step=$this->input->post('step');
            $monday=$this->input->post('monday');
            $tuesday=$this->input->post('tuesday');
            $wednesday=$this->input->post('wednesday');
            $thursday=$this->input->post('thursday');
            $friday=$this->input->post('friday');
            $saturday=$this->input->post('saturday');
			$sunday=$this->input->post('sunday');
            $st1=$this->input->post('st1');
            $ot1=$this->input->post('ot1');
            $nb1=$this->input->post('nb1');
            $st2=$this->input->post('st2');
            $ot2=$this->input->post('ot2');
            $nb2=$this->input->post('nb2');
            $st3=$this->input->post('st3');
            $ot3=$this->input->post('ot3');
            $nb3=$this->input->post('nb3');
            $st4=$this->input->post('st4');
            $ot4=$this->input->post('ot4');
            $nb4=$this->input->post('nb4');
            $st5=$this->input->post('st5');
            $ot5=$this->input->post('ot5');
            $nb5=$this->input->post('nb5');
            $st6=$this->input->post('st6');
            $ot6=$this->input->post('ot6');
            $nb6=$this->input->post('nb6');
			$st7=$this->input->post('st7');
			$ot7=$this->input->post('ot7');
			$nb7=$this->input->post('nb7');
            $uid=$this->session->userdata('uid');
//validate step later
            if($pcode!='' && $oem!='' && $monday!='' && $tuesday!='' && $wednesday!='' && $thursday!='' && $friday!='' && $saturday!='' && $st1!='' && $ot1!='' && $nb1!='' && $st2!='' && $ot2!='' && $nb2!='' && $st3!='' && $ot3!='' && $nb3!='' && $st4!='' && $ot4!='' && $nb4!='' && $st5!='' && $ot5!='' && $nb5!='' && $st6!='' && $ot6!='' && $nb6!='')
            {
				$mon['date']=$monday;
				$mon['st']=$st1;
				$mon['ot']=$ot1;
				$mon['nb']=$nb1;

				$tue['date']=$tuesday;
				$tue['st']=$st2;
				$tue['ot']=$ot2;
				$tue['nb']=$nb2;

				$wed['date']=$wednesday;
				$wed['st']=$st3;
				$wed['ot']=$ot3;
				$wed['nb']=$nb3;

				$thu['date']=$thursday;
				$thu['st']=$st4;
				$thu['ot']=$ot4;
				$thu['nb']=$nb4;

				$fri['date']=$friday;
				$fri['st']=$st5;
				$fri['ot']=$ot5;
				$fri['nb']=$nb5;

				$sat['date']=$saturday;
				$sat['st']=$st6;
				$sat['ot']=$ot6;
				$sat['nb']=$nb6;

				$sun['date']=$sunday;
				$sun['st']=$st7;
				$sun['ot']=$ot7;
				$sun['nb']=$nb7;

				$data = array(
					'ProjectCode'=> $pcode,
					'Oem' => $oem,
					'Step' => $step,
					'Monday'=> json_encode($mon),
					'Tuesday' => json_encode($tue),
					'Wednesday'=>json_encode($wed),
					'Thursday' => json_encode($thu),
					'Friday'=> json_encode($fri),
					'Saturday' => json_encode($sat),
					'Sunday' => json_encode($sun),
					'SubmittedBy' => $uid
				);

                $this->load->model('Timesheet');
                $this->Timesheet->add_timesheet($data);
                redirect(base_url()."home/timesheet_added");
            }
            else
                redirect(base_url()."home/mytime");
        }
        else
            redirect(base_url());
    }

    public function timesheet_added()
    {
        if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') == 'Y')
        {
            echo "<script>alert('Timesheet Uploaded Successfully')</script>";
            $this->mytime();
        }
        else
        {
            redirect(base_url());
        }
    }


	
}





