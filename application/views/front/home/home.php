<?php 
	
	foreach($employee->result() as $row)
		{
			$role = $row->role;
			$employee_id= $row->id;
			$initial = $row->initial;
			$fname = $row->fname;
			$mname = $row->mname;
			$lname = $row->lname;
			$mstatus = $row->mstatus;
			$nationality = $row->nationality;
			$dob = $row->dob;
			$gender = $row->gender;
			$pnumber = $row->pnumber;
			$pemail = $row->pemail;
			$snumber = $row->snumber;
			$semail = $row->semail;
			$address = $row->address;
			$ehistory = $row->ehistory;
			$aadhar = $row->aadhar;
			$acnumber = $row->acnumber;
			$pan = $row->pan;
			$passport = $row->passport;
			$doj = $row->doj;
			$estatus = $row->estatus;
			$etype = $row->etype;
			$designation1 = $row->designation;
			$department = $row->department;
			$billing = $row->billing;
			$minumber = $row->minumber;
		}	
	
	
	?>

							

<div id="content"><div class="tour_aboutHrms"></div>            



<div class='home_menu'><div role='main' class='menu-head main' id='menu-shadow' style='display:none;'>

				<ul id='main_ul' class='menu flex'>
                    <li id='main_parent_173' super-parent = 'main_parent_173' class = 'clickable_menu -main tour_dashboard' menu-url ='<?php echo base_url() ?>' selected-class = '' >
                        <a id='173' ><b>Dashboard</b></a>
                    </li>
                    <!--
                    <li id='main_parent_4'   super-parent = 'main_parent_4' class = 'clickable_menu -main tour_employeeselfservice' menu-url ='' for-childs = 'div_mchilds_4' selected-class = ''>
                        <a id='4'><span class='scroll-menu '></span><b>Selfie</b></a>
                    </li>-->
                    <li id='main_parent_143'   super-parent = 'main_parent_143' class = 'clickable_menu -main tour_service' menu-url ='' for-childs = 'div_mchilds_143' selected-class = ''>
                        <a id='143'><span class='scroll-menu '></span><b>My Time</b></a>
                    </li>
                    <li id='main_parent_3'   super-parent = 'main_parent_3' class = 'clickable_menu -main tour_humanresource' menu-url ='' for-childs = 'div_mchilds_3' selected-class = ''>
                        <a id='3'><span class='scroll-menu '></span><b>My Leave</b></a>
                    </li>
                    <li id='main_parent_149'   super-parent = 'main_parent_149' class = 'clickable_menu -main tour_performanceappraisal' menu-url ='' for-childs = 'div_mchilds_149' selected-class = ''>
                        <a id='149'><span class='scroll-menu '></span><b>Attendance</b></a>
                    </li>
                    <li id='main_parent_19'   super-parent = 'main_parent_19' class = 'clickable_menu -main tour_requisition' menu-url ='' for-childs = 'div_mchilds_19' selected-class = ''>
                        <a id='19'><span class='scroll-menu '></span><b>Approvals</b></a>
                    </li>
                    <li id='main_parent_5'   super-parent = 'main_parent_5' class = 'clickable_menu -main tour_backgroundchecks' menu-url ='' for-childs = 'div_mchilds_5' selected-class = ''>
                        <a id='5'><span class='scroll-menu '></span><b>Reports</b></a>
                        </li>
				
				<!--
				<li id='main_parent_1'   super-parent = 'main_parent_1' class = 'clickable_menu -main tour_organization' menu-url ='' for-childs = 'div_mchilds_1' selected-class = ''><a id='1'><span class='scroll-menu '></span><b>Reports</b></a></li>
				<li id='main_parent_8'   super-parent = 'main_parent_8' class = 'clickable_menu -main tour_reports' menu-url ='http://localhost/sentrifugo/index.php/reports' for-childs = '' selected-class = ''><a id='8'><span class='scroll-menu '></span><b>Analytics</b></a></li><li id='main_parent_70'   super-parent = 'main_parent_70' class = 'clickable_menu -main tour_siteconfiguration' menu-url ='' for-childs = 'div_mchilds_70' selected-class = ''><a id='70'><span class='scroll-menu '></span><b>Site Config</b></a></li><li id='main_parent_142'   super-parent = 'main_parent_142' class = 'clickable_menu -main tour_managemodules' menu-url ='http://localhost/sentrifugo/index.php/managemenus' for-childs = '' selected-class = ''><a id='142'><span class='scroll-menu '></span><b>Modules</b></a></li><li id='main_parent_185'   super-parent = 'main_parent_185' class = 'clickable_menu -main tour_expenses' menu-url ='' for-childs = 'div_mchilds_185' selected-class = ''><a id='185'><span class='scroll-menu '></span><b>Expenses</b></a></li><li id='main_parent_186'   super-parent = 'main_parent_186' class = 'clickable_menu -main tour_assets' menu-url ='' for-childs = 'div_mchilds_186' selected-class = ''><a id='186'><span class='scroll-menu '></span><b>Assets</b></a></li><li id='main_parent_201'   super-parent = 'main_parent_201' class = 'clickable_menu -main tour_disciplinary' menu-url ='' for-childs = 'div_mchilds_201' selected-class = ''><a id='201'><span class='scroll-menu '></span><b>Disciplinary</b></a></li>
				
				
				
				 
				
				
				<li id='main_parent_130' super-parent = 'main_parent_130' class = 'clickable_menu -main tour_timemanagement' menu-url ='http://localhost/sentrifugo/index.php/timemanagement' selected-class = '' > <a id='130' ><b>Time</b></a></li>
				
				 -->
				<li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li>
				<li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li><li><br></li>
				
				
				
				
				<li >
					
					
					<form method="post" action="<?php echo base_url();?>home/search">
  
  <div id="prefetch">
  
  <input type="text" name="name" id="search_box" class="form-control input-lg typeahead" placeholder="Search Employee">

  <button type="submit" class="button2"><i class="fa fa-search"></i></button>

   
    </div>
   
	  </form>  
					
					
					
				</li>
				
				  </ul>
				  
				  
				  
				
				  
				  
				  

			 </div></div>

			



<div class="content_inners">

    <div id="menu-hide-show">

        <div style="display:none" id = 'mainmenushowhidebutton'>

            <div class='sprite'></div>

        </div>

    </div>  



<div id="container">

    <div id="spinner" class="ajax-loader" style="display:none;" >

    <img id="img-spinner" src="<?php echo base_url() ?>media/images/loader2.gif" alt="Loading" />				

</div>

<!-- <div id="wrapper">  --> <!-- Toggle Left Menu --> <!-- <div class="toggleleftwrapper">Close</div> --> <!-- End Toggle Left Menu -->

<div class="" id="wrappernew">      

    <!-- Sidebar -->

      <div id="sidebar-wrapper">

          <!--Menu-->

      <ul class="sidebar-nav" id="sidebar_menu">

           <li class="sidebar-brand">

               <a href="#" id="menu-toggle">

                  <!--<span class="glyphicon glyphicon-chevron-left" id="main_icon"></span>-->

                  <span class="fa fa-caret-right mtg mtg-off"></span>

                  <span class="fa fa-caret-left mtg mtg-on"></span>

               </a>

            </li>

      </ul>

       								    

<div class='side-menu div_mchilds_4' style='display:none;'>

									<ul><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_31' onclick='togglesubmenus(31);'><b>Leaves</b></span><ul><li class = 'clickable_menu' primary_parent = '31' super-parent = 'main_parent_4' menu-url = 'http://localhost/sentrifugo/index.php/leaverequest' parent-div = 'div_mchilds_4'><a id=61 href='http://localhost/sentrifugo/index.php/leaverequest/'>Leave Request</a></li><li class = 'clickable_menu' primary_parent = '31' super-parent = 'main_parent_4' menu-url = 'http://localhost/sentrifugo/index.php/pendingleaves' parent-div = 'div_mchilds_4'><a id=62 href='http://localhost/sentrifugo/index.php/pendingleaves/'>My Leave</a></li><li class = 'clickable_menu' primary_parent = '31' super-parent = 'main_parent_4' menu-url = 'http://localhost/sentrifugo/index.php/manageremployeevacations' parent-div = 'div_mchilds_4'><a id=65 href='http://localhost/sentrifugo/index.php/manageremployeevacations/'>Employee Leave</a></li></ul></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_4' menu-url = 'http://localhost/sentrifugo/index.php/mydetails' parent-div = 'div_mchilds_4'><a id=32 href='http://localhost/sentrifugo/index.php/mydetails/'>My Details</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_4' menu-url = 'http://localhost/sentrifugo/index.php/myholidaycalendar' parent-div = 'div_mchilds_4'><a id=43 href='http://localhost/sentrifugo/index.php/myholidaycalendar/'>My Holiday Calendar</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_4' menu-url = 'http://localhost/sentrifugo/index.php/myemployees' parent-div = 'div_mchilds_4'><a id=34 href='http://localhost/sentrifugo/index.php/myemployees/'>My Team</a></li></ul></div><div class='side-menu div_mchilds_143' style='display:none;'>

									<ul><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_147' onclick='togglesubmenus(147);'><b>Configuration</b></span><ul><li class = 'clickable_menu' primary_parent = '147' super-parent = 'main_parent_143' menu-url = 'http://localhost/sentrifugo/index.php/servicedeskdepartment' parent-div = 'div_mchilds_143'><a id=144 href='http://localhost/sentrifugo/index.php/servicedeskdepartment/'>Categories</a></li><li class = 'clickable_menu' primary_parent = '147' super-parent = 'main_parent_143' menu-url = 'http://localhost/sentrifugo/index.php/servicedeskrequest' parent-div = 'div_mchilds_143'><a id=145 href='http://localhost/sentrifugo/index.php/servicedeskrequest/'>Request Types</a></li><li class = 'clickable_menu' primary_parent = '147' super-parent = 'main_parent_143' menu-url = 'http://localhost/sentrifugo/index.php/servicedeskconf' parent-div = 'div_mchilds_143'><a id=146 href='http://localhost/sentrifugo/index.php/servicedeskconf/'>Settings</a></li></ul></li></ul></div><div class='side-menu div_mchilds_3' style='display:none;'>

									<ul><li class = 'clickable_menu single-menu' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/employee' parent-div = 'div_mchilds_3'><a id=14 href='http://localhost/sentrifugo/index.php/employee/'>Employees</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/roles' parent-div = 'div_mchilds_3'><a id=20 href='http://localhost/sentrifugo/index.php/roles/'>Roles & Privileges</a></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_16' onclick='togglesubmenus(16);'><b>Holiday Management</b></span><ul><li class = 'clickable_menu' primary_parent = '16' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/holidaygroups' parent-div = 'div_mchilds_3'><a id=41 href='http://localhost/sentrifugo/index.php/holidaygroups/'>Manage Holiday Group</a></li><li class = 'clickable_menu' primary_parent = '16' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/holidaydates' parent-div = 'div_mchilds_3'><a id=42 href='http://localhost/sentrifugo/index.php/holidaydates/'>Manage Holidays</a></li></ul></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_17' onclick='togglesubmenus(17);'><b>Leave Management</b></span><ul><li class = 'clickable_menu' primary_parent = '17' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/leavemanagement' parent-div = 'div_mchilds_3'><a id=44 href='http://localhost/sentrifugo/index.php/leavemanagement/'>Leave Management Options</a></li><li class = 'clickable_menu' primary_parent = '17' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/empleavesummary' parent-div = 'div_mchilds_3'><a id=45 href='http://localhost/sentrifugo/index.php/empleavesummary/'>Employee Leave Summary</a></li><li class = 'clickable_menu' primary_parent = '17' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/addemployeeleaves' parent-div = 'div_mchilds_3'><a id=184 href='http://localhost/sentrifugo/index.php/addemployeeleaves/'>Add Employee Leave</a></li></ul></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_177' onclick='togglesubmenus(177);'><b>Exit Procedure</b></span><ul><li class = 'clickable_menu' primary_parent = '177' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/exit/exittypes' parent-div = 'div_mchilds_3'><a id=179 href='http://localhost/sentrifugo/index.php/exit/exittypes/'>Exit Types</a></li><li class = 'clickable_menu' primary_parent = '177' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/exit/configureexitqs' parent-div = 'div_mchilds_3'><a id=210 href='http://localhost/sentrifugo/index.php/exit/configureexitqs/'>Exit Interview Questions</a></li><li class = 'clickable_menu' primary_parent = '177' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/exit/exitprocsettings' parent-div = 'div_mchilds_3'><a id=178 href='http://localhost/sentrifugo/index.php/exit/exitprocsettings/'>Settings</a></li><li class = 'clickable_menu' primary_parent = '177' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/exit/exitproc' parent-div = 'div_mchilds_3'><a id=180 href='http://localhost/sentrifugo/index.php/exit/exitproc/'>Initiate/Check Status</a></li><li class = 'clickable_menu' primary_parent = '177' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/exit/allexitproc' parent-div = 'div_mchilds_3'><a id=181 href='http://localhost/sentrifugo/index.php/exit/allexitproc/'>All Exit Procedures</a></li></ul></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_113' onclick='togglesubmenus(113);'><b>Employee Configuration</b></span><ul><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/empconfiguration' parent-div = 'div_mchilds_3'><a id=140 href='http://localhost/sentrifugo/index.php/empconfiguration/'>Employee Tabs</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/employmentstatus' parent-div = 'div_mchilds_3'><a id=114 href='http://localhost/sentrifugo/index.php/employmentstatus/'>Employment Status</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/payfrequency' parent-div = 'div_mchilds_3'><a id=117 href='http://localhost/sentrifugo/index.php/payfrequency/'>Pay Frequency</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/remunerationbasis' parent-div = 'div_mchilds_3'><a id=118 href='http://localhost/sentrifugo/index.php/remunerationbasis/'>Remuneration Basis</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/jobtitles' parent-div = 'div_mchilds_3'><a id=116 href='http://localhost/sentrifugo/index.php/jobtitles/'>Job Titles</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/positions' parent-div = 'div_mchilds_3'><a id=120 href='http://localhost/sentrifugo/index.php/positions/'>Positions</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/competencylevel' parent-div = 'div_mchilds_3'><a id=124 href='http://localhost/sentrifugo/index.php/competencylevel/'>Competency Levels</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/educationlevelcode' parent-div = 'div_mchilds_3'><a id=125 href='http://localhost/sentrifugo/index.php/educationlevelcode/'>Education Levels</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/language' parent-div = 'div_mchilds_3'><a id=121 href='http://localhost/sentrifugo/index.php/language/'>Languages</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/employeeleavetypes' parent-div = 'div_mchilds_3'><a id=128 href='http://localhost/sentrifugo/index.php/employeeleavetypes/'>Leave Types</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/attendancestatuscode' parent-div = 'div_mchilds_3'><a id=126 href='http://localhost/sentrifugo/index.php/attendancestatuscode/'>Attendance Status</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/bankaccounttype' parent-div = 'div_mchilds_3'><a id=123 href='http://localhost/sentrifugo/index.php/bankaccounttype/'>Bank Account Types</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/identitydocuments' parent-div = 'div_mchilds_3'><a id=139 href='http://localhost/sentrifugo/index.php/identitydocuments/'>Identity Documents</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/eeoccategory' parent-div = 'div_mchilds_3'><a id=115 href='http://localhost/sentrifugo/index.php/eeoccategory/'>EEOC Categories</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/workeligibilitydoctypes' parent-div = 'div_mchilds_3'><a id=127 href='http://localhost/sentrifugo/index.php/workeligibilitydoctypes/'>Work Eligibility Document Types</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/veteranstatus' parent-div = 'div_mchilds_3'><a id=107 href='http://localhost/sentrifugo/index.php/veteranstatus/'>Veteran Status</a></li><li class = 'clickable_menu' primary_parent = '113' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/militaryservice' parent-div = 'div_mchilds_3'><a id=108 href='http://localhost/sentrifugo/index.php/militaryservice/'>Military Service Types</a></li></ul></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_207' onclick='togglesubmenus(207);'><b>Contacts</b></span><ul><li class = 'clickable_menu' primary_parent = '207' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/usermanagement' parent-div = 'div_mchilds_3'><a id=21 href='http://localhost/sentrifugo/index.php/usermanagement/'>External Users</a></li><li class = 'clickable_menu' primary_parent = '207' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/vendors' parent-div = 'div_mchilds_3'><a id=187 href='http://localhost/sentrifugo/index.php/vendors/'>Vendors</a></li><li class = 'clickable_menu' primary_parent = '207' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/clients' parent-div = 'div_mchilds_3'><a id=208 href='http://localhost/sentrifugo/index.php/clients/'>Clients</a></li><li class = 'clickable_menu' primary_parent = '207' super-parent = 'main_parent_3' menu-url = 'http://localhost/sentrifugo/index.php/projects' parent-div = 'div_mchilds_3'><a id=209 href='http://localhost/sentrifugo/index.php/projects/'>Projects</a></li></ul></li></ul></div><div class='side-menu div_mchilds_149' style='display:none;'>

									<ul><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_162' onclick='togglesubmenus(162);'><b>Configuration</b></span><ul><li class = 'clickable_menu' primary_parent = '162' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalcategory' parent-div = 'div_mchilds_149'><a id=150 href='http://localhost/sentrifugo/index.php/appraisalcategory/'>Parameters</a></li><li class = 'clickable_menu' primary_parent = '162' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalquestions' parent-div = 'div_mchilds_149'><a id=152 href='http://localhost/sentrifugo/index.php/appraisalquestions/'>Questions</a></li><li class = 'clickable_menu' primary_parent = '162' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalskills' parent-div = 'div_mchilds_149'><a id=151 href='http://localhost/sentrifugo/index.php/appraisalskills/'>Skills</a></li><li class = 'clickable_menu' primary_parent = '162' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalratings' parent-div = 'div_mchilds_149'><a id=160 href='http://localhost/sentrifugo/index.php/appraisalratings/'>Ratings</a></li></ul></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalinit' parent-div = 'div_mchilds_149'><a id=154 href='http://localhost/sentrifugo/index.php/appraisalinit/'>Initialize Appraisal</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalmanager' parent-div = 'div_mchilds_149'><a id=169 href='http://localhost/sentrifugo/index.php/appraisalmanager/'>Manager Appraisal</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalstatus/manager' parent-div = 'div_mchilds_149'><a id=158 href='http://localhost/sentrifugo/index.php/appraisalstatus/manager/'>Manager Status</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalstatus/employee' parent-div = 'div_mchilds_149'><a id=159 href='http://localhost/sentrifugo/index.php/appraisalstatus/employee/'>Employee Status</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalself' parent-div = 'div_mchilds_149'><a id=161 href='http://localhost/sentrifugo/index.php/appraisalself/'>Self Appraisal</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/myteamappraisal' parent-div = 'div_mchilds_149'><a id=174 href='http://localhost/sentrifugo/index.php/myteamappraisal/'>My Team Appraisal</a></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_175' onclick='togglesubmenus(175);'><b>Appraisal History</b></span><ul><li class = 'clickable_menu' primary_parent = '175' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalhistoryself' parent-div = 'div_mchilds_149'><a id=188 href='http://localhost/sentrifugo/index.php/appraisalhistoryself/'>My Appraisal History</a></li><li class = 'clickable_menu' primary_parent = '175' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/appraisalhistoryteam' parent-div = 'div_mchilds_149'><a id=189 href='http://localhost/sentrifugo/index.php/appraisalhistoryteam/'>Team Appraisal History</a></li></ul></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_163' onclick='togglesubmenus(163);'><b>Feedforward</b></span><ul><li class = 'clickable_menu' primary_parent = '163' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/feedforwardquestions' parent-div = 'div_mchilds_149'><a id=166 href='http://localhost/sentrifugo/index.php/feedforwardquestions/'>Questions</a></li><li class = 'clickable_menu' primary_parent = '163' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/feedforwardinit' parent-div = 'div_mchilds_149'><a id=167 href='http://localhost/sentrifugo/index.php/feedforwardinit/'>Initialize Feedforward</a></li><li class = 'clickable_menu' primary_parent = '163' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/feedforwardemployee' parent-div = 'div_mchilds_149'><a id=170 href='http://localhost/sentrifugo/index.php/feedforwardemployee/'>Appraise Your Manager</a></li><li class = 'clickable_menu' primary_parent = '163' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/feedforwardmanager' parent-div = 'div_mchilds_149'><a id=171 href='http://localhost/sentrifugo/index.php/feedforwardmanager/'>Manager Feedforward</a></li><li class = 'clickable_menu' primary_parent = '163' super-parent = 'main_parent_149' menu-url = 'http://localhost/sentrifugo/index.php/feedforwardstatus' parent-div = 'div_mchilds_149'><a id=172 href='http://localhost/sentrifugo/index.php/feedforwardstatus/'>Employee Status</a></li></ul></li></ul></div><div class='side-menu div_mchilds_19' style='display:none;'>

									<ul><li class = 'clickable_menu single-menu' super-parent = 'main_parent_19' menu-url = 'http://localhost/sentrifugo/index.php/requisition' parent-div = 'div_mchilds_19'><a id=54 href='http://localhost/sentrifugo/index.php/requisition/'>Openings/Positions</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_19' menu-url = 'http://localhost/sentrifugo/index.php/approvedrequisitions' parent-div = 'div_mchilds_19'><a id=134 href='http://localhost/sentrifugo/index.php/approvedrequisitions/'>Approved Requisitions</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_19' menu-url = 'http://localhost/sentrifugo/index.php/rejectedrequisitions' parent-div = 'div_mchilds_19'><a id=138 href='http://localhost/sentrifugo/index.php/rejectedrequisitions/'>Rejected Requisitions</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_19' menu-url = 'http://localhost/sentrifugo/index.php/candidatedetails' parent-div = 'div_mchilds_19'><a id=55 href='http://localhost/sentrifugo/index.php/candidatedetails/'>Candidates</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_19' menu-url = 'http://localhost/sentrifugo/index.php/scheduleinterviews' parent-div = 'div_mchilds_19'><a id=57 href='http://localhost/sentrifugo/index.php/scheduleinterviews/'>Interviews</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_19' menu-url = 'http://localhost/sentrifugo/index.php/shortlistedcandidates' parent-div = 'div_mchilds_19'><a id=56 href='http://localhost/sentrifugo/index.php/shortlistedcandidates/'>Shortlisted & Selected Candidates</a></li></ul></div><div class='side-menu div_mchilds_5' style='display:none;'>

									<ul><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_22' onclick='togglesubmenus(22);'><b>Configuration</b></span><ul><li class = 'clickable_menu' primary_parent = '22' super-parent = 'main_parent_5' menu-url = 'http://localhost/sentrifugo/index.php/bgscreeningtype' parent-div = 'div_mchilds_5'><a id=68 href='http://localhost/sentrifugo/index.php/bgscreeningtype/'>Screening Types</a></li><li class = 'clickable_menu' primary_parent = '22' super-parent = 'main_parent_5' menu-url = 'http://localhost/sentrifugo/index.php/agencylist' parent-div = 'div_mchilds_5'><a id=69 href='http://localhost/sentrifugo/index.php/agencylist/'>Agencies</a></li></ul></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_141' onclick='togglesubmenus(141);'><b>Screening</b></span><ul><li class = 'clickable_menu' primary_parent = '141' super-parent = 'main_parent_5' menu-url = 'http://localhost/sentrifugo/index.php/empscreening' parent-div = 'div_mchilds_5'><a id=23 href='http://localhost/sentrifugo/index.php/empscreening/'>Employee/Candidate Screening</a></li></ul></li></ul></div><div class='side-menu div_mchilds_1' style='display:none;'>

									<ul><li class = 'clickable_menu single-menu' super-parent = 'main_parent_1' menu-url = 'http://localhost/sentrifugo/index.php/organisationinfo' parent-div = 'div_mchilds_1'><a id=9 href='http://localhost/sentrifugo/index.php/organisationinfo/'>Organization Info</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_1' menu-url = 'http://localhost/sentrifugo/index.php/businessunits' parent-div = 'div_mchilds_1'><a id=10 href='http://localhost/sentrifugo/index.php/businessunits/'>Business Units</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_1' menu-url = 'http://localhost/sentrifugo/index.php/departments' parent-div = 'div_mchilds_1'><a id=11 href='http://localhost/sentrifugo/index.php/departments/'>Departments</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_1' menu-url = 'http://localhost/sentrifugo/index.php/structure' parent-div = 'div_mchilds_1'><a id=12 href='http://localhost/sentrifugo/index.php/structure/'>Organization Structure</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_1' menu-url = 'http://localhost/sentrifugo/index.php/heirarchy' parent-div = 'div_mchilds_1'><a id=13 href='http://localhost/sentrifugo/index.php/heirarchy/'>Organization Hierarchy</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_1' menu-url = 'http://localhost/sentrifugo/index.php/announcements' parent-div = 'div_mchilds_1'><a id=168 href='http://localhost/sentrifugo/index.php/announcements/'>Announcements<span class='beta_menu'></span></a></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_176' onclick='togglesubmenus(176);'><b>Policy Documents</b></span><ul><li class = 'clickable_menu' primary_parent = '176' super-parent = 'main_parent_1' menu-url = 'http://localhost/sentrifugo/index.php/categories' parent-div = 'div_mchilds_1'><a id=182 href='http://localhost/sentrifugo/index.php/categories/'>Manage Categories</a></li></ul></li></ul></div><div class='side-menu div_mchilds_70' style='display:none;'>

									<ul><li class = 'clickable_menu single-menu' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/sitepreference' parent-div = 'div_mchilds_70'><a id=131 href='http://localhost/sentrifugo/index.php/sitepreference/'>Site Preferences</a></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_72' onclick='togglesubmenus(72);'><b>General</b></span><ul><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/ethniccode' parent-div = 'div_mchilds_70'><a id=85 href='http://localhost/sentrifugo/index.php/ethniccode/'>Ethnic Codes</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/identitycodes' parent-div = 'div_mchilds_70'><a id=133 href='http://localhost/sentrifugo/index.php/identitycodes/'>Identity Codes</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/gender' parent-div = 'div_mchilds_70'><a id=86 href='http://localhost/sentrifugo/index.php/gender/'>Gender</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/timezone' parent-div = 'div_mchilds_70'><a id=80 href='http://localhost/sentrifugo/index.php/timezone/'>Time Zones</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/maritalstatus' parent-div = 'div_mchilds_70'><a id=87 href='http://localhost/sentrifugo/index.php/maritalstatus/'>Marital Status</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/prefix' parent-div = 'div_mchilds_70'><a id=88 href='http://localhost/sentrifugo/index.php/prefix/'>Prefixes</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/racecode' parent-div = 'div_mchilds_70'><a id=89 href='http://localhost/sentrifugo/index.php/racecode/'>Race Codes</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/nationalitycontextcode' parent-div = 'div_mchilds_70'><a id=90 href='http://localhost/sentrifugo/index.php/nationalitycontextcode/'>Nationality Context Codes</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/nationality' parent-div = 'div_mchilds_70'><a id=91 href='http://localhost/sentrifugo/index.php/nationality/'>Nationalities</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/accountclasstype' parent-div = 'div_mchilds_70'><a id=92 href='http://localhost/sentrifugo/index.php/accountclasstype/'>Account Class Types</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/licensetype' parent-div = 'div_mchilds_70'><a id=93 href='http://localhost/sentrifugo/index.php/licensetype/'>License Types</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/emailcontacts' parent-div = 'div_mchilds_70'><a id=136 href='http://localhost/sentrifugo/index.php/emailcontacts/'>Email Contacts</a></li><li class = 'clickable_menu' primary_parent = '72' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/numberformats' parent-div = 'div_mchilds_70'><a id=132 href='http://localhost/sentrifugo/index.php/numberformats/'>Number Formats</a></li></ul></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_73' onclick='togglesubmenus(73);'><b>Location</b></span><ul><li class = 'clickable_menu' primary_parent = '73' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/countries' parent-div = 'div_mchilds_70'><a id=100 href='http://localhost/sentrifugo/index.php/countries/'>Countries</a></li><li class = 'clickable_menu' primary_parent = '73' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/states' parent-div = 'div_mchilds_70'><a id=101 href='http://localhost/sentrifugo/index.php/states/'>States</a></li><li class = 'clickable_menu' primary_parent = '73' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/cities' parent-div = 'div_mchilds_70'><a id=102 href='http://localhost/sentrifugo/index.php/cities/'>Cities</a></li><li class = 'clickable_menu' primary_parent = '73' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/geographygroup' parent-div = 'div_mchilds_70'><a id=103 href='http://localhost/sentrifugo/index.php/geographygroup/'>Geo Groups</a></li></ul></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_75' onclick='togglesubmenus(75);'><b>Currency</b></span><ul><li class = 'clickable_menu' primary_parent = '75' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/currency' parent-div = 'div_mchilds_70'><a id=110 href='http://localhost/sentrifugo/index.php/currency/'>Currencies</a></li><li class = 'clickable_menu' primary_parent = '75' super-parent = 'main_parent_70' menu-url = 'http://localhost/sentrifugo/index.php/currencyconverter' parent-div = 'div_mchilds_70'><a id=111 href='http://localhost/sentrifugo/index.php/currencyconverter/'>Currency Conversions</a></li></ul></li></ul></div><div class='side-menu div_mchilds_185' style='display:none;'>

									<ul><li class = 'clickable_menu single-menu' super-parent = 'main_parent_185' menu-url = 'http://localhost/sentrifugo/index.php/expenses/expenses' parent-div = 'div_mchilds_185'><a id=198 href='http://localhost/sentrifugo/index.php/expenses/expenses/'>Expenses</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_185' menu-url = 'http://localhost/sentrifugo/index.php/expenses/expensecategories' parent-div = 'div_mchilds_185'><a id=191 href='http://localhost/sentrifugo/index.php/expenses/expensecategories/'>Category</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_185' menu-url = 'http://localhost/sentrifugo/index.php/expenses/paymentmode' parent-div = 'div_mchilds_185'><a id=192 href='http://localhost/sentrifugo/index.php/expenses/paymentmode/'>Payment Mode</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_185' menu-url = 'http://localhost/sentrifugo/index.php/expenses/receipts' parent-div = 'div_mchilds_185'><a id=193 href='http://localhost/sentrifugo/index.php/expenses/receipts/'>Receipts</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_185' menu-url = 'http://localhost/sentrifugo/index.php/expenses/trips' parent-div = 'div_mchilds_185'><a id=194 href='http://localhost/sentrifugo/index.php/expenses/trips/'>Trips</a></li><li class='acc_li'><span class='acc_li_toggle' id='acc_li_toggle_195' onclick='togglesubmenus(195);'><b>Advances</b></span><ul><li class = 'clickable_menu' primary_parent = '195' super-parent = 'main_parent_185' menu-url = 'http://localhost/sentrifugo/index.php/expenses/advances/myadvances' parent-div = 'div_mchilds_185'><a id=196 href='http://localhost/sentrifugo/index.php/expenses/advances/myadvances/'>My Advances</a></li><li class = 'clickable_menu' primary_parent = '195' super-parent = 'main_parent_185' menu-url = 'http://localhost/sentrifugo/index.php/expenses/employeeadvances' parent-div = 'div_mchilds_185'><a id=197 href='http://localhost/sentrifugo/index.php/expenses/employeeadvances/'>Employee Advances</a></li></ul></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_185' menu-url = 'http://localhost/sentrifugo/index.php/expenses/myemployeeexpenses' parent-div = 'div_mchilds_185'><a id=199 href='http://localhost/sentrifugo/index.php/expenses/myemployeeexpenses/'>My Employee Expenses</a></li></ul></div><div class='side-menu div_mchilds_186' style='display:none;'>

									<ul><li class = 'clickable_menu single-menu' super-parent = 'main_parent_186' menu-url = 'http://localhost/sentrifugo/index.php/assets/assets' parent-div = 'div_mchilds_186'><a id=200 href='http://localhost/sentrifugo/index.php/assets/assets/'>Assets</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_186' menu-url = 'http://localhost/sentrifugo/index.php/assets/assetcategories' parent-div = 'div_mchilds_186'><a id=190 href='http://localhost/sentrifugo/index.php/assets/assetcategories/'>Asset Categories</a></li></ul></div><div class='side-menu div_mchilds_201' style='display:none;'>

									<ul><li class = 'clickable_menu single-menu' super-parent = 'main_parent_201' menu-url = 'http://localhost/sentrifugo/index.php/disciplinaryviolation' parent-div = 'div_mchilds_201'><a id=202 href='http://localhost/sentrifugo/index.php/disciplinaryviolation/'>Violation Type</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_201' menu-url = 'http://localhost/sentrifugo/index.php/disciplinaryincident' parent-div = 'div_mchilds_201'><a id=203 href='http://localhost/sentrifugo/index.php/disciplinaryincident/'>Raise An Incident</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_201' menu-url = 'http://localhost/sentrifugo/index.php/disciplinarymyincidents' parent-div = 'div_mchilds_201'><a id=204 href='http://localhost/sentrifugo/index.php/disciplinarymyincidents/'>My Incidents</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_201' menu-url = 'http://localhost/sentrifugo/index.php/disciplinaryteamincidents' parent-div = 'div_mchilds_201'><a id=205 href='http://localhost/sentrifugo/index.php/disciplinaryteamincidents/'>Team Incidents</a></li><li class = 'clickable_menu single-menu' super-parent = 'main_parent_201' menu-url = 'http://localhost/sentrifugo/index.php/disciplinaryallincidents' parent-div = 'div_mchilds_201'><a id=206 href='http://localhost/sentrifugo/index.php/disciplinaryallincidents/'>All Incidents</a></li></ul></div><div class='side-menu div_mchilds_logs' style='display:none;'>

								<ul>

							   

								<li super-parent = 'main_parent_logs' parent-div='div_mchilds_logs' class = 'clickable_menu single-menu' menu-url = 'http://localhost/sentrifugo/index.php/logmanager'><a href='http://localhost/sentrifugo/index.php/logmanager'>Activity Log</a></li>

								<li super-parent = 'main_parent_logs' parent-div='div_mchilds_logs' class = 'clickable_menu single-menu' menu-url = 'http://localhost/sentrifugo/index.php/userloginlog'><a href='http://localhost/sentrifugo/index.php/userloginlog'>User Log</a></li>

								

								</ul>

							  </div>

          <div class="shortcuts"><h1>Menu</h1>
              <div class="short-text-ctrl">
                  <a href="<?php echo base_url();?>home/reset_pass">
                      <li class="clickable_menu single-menu">
                          Change Password</li>
                  </a>
              </div><br>


              <h1>Project</h1>
              <div class="short-text-ctrl">
                  <?php if($this->session->userdata('roleadd') == "Y") { ?>

                      <a href="<?php echo base_url();?>home/create_project">
                          <li class="clickable_menu single-menu">

                              Create Project </li></a><br>

                  <?php } ?>
                  <a href="<?php echo base_url();?>home/project_profile">
                      <li class="clickable_menu single-menu">
                          Project Profile</li></a><br>
              </div>

          </div>
             
                                          
                                                                       
                                                                                                    
                                                                                                                                                              

</div>







<div id="page-content-wrapper">

        <!-- Keep all page content within the page-content inset div! -->

        <div class="page-content inset">

          <div class="row">

              <div class="col-md-12">

    <div class="wrapperdivright">

    <div id="breadcrumdiv">

	

        </div>

    

	



											

    <div id="maincontentdiv">	

        <div id="dialog-confirm" style="display:none;">

            <div class="newframe-div">

                <div class="new-form-ui height32">

                    <div class="division">

                        <input type="text" maxlength="12"  id="number_value" name="number_value">

                    </div>

                    <span class="errors" id="errors-contactnumber"></span>

                </div>

            </div>

        </div>

    									

        <div id="empstatus-alert" style="display:none;">

            <div class="newframe-div"><div id="empstatusmessage"></div></div>

        </div>

    									

        <div id="empleaves-alert" style="display:none;">

            <div class="newframe-div"><div id="empleavesmessage"></div></div>

        </div>									

<script type="text/javascript" language="javascript">

$("#menu-toggle").click(function(e) {

        e.preventDefault();

        $("#wrappernew").toggleClass("active");

});

</script>                                                                                   

<script type="text/javascript" language="javascript">

//Toggle Left Menu



$('.toggleleftwrapper').click(function(){

    $('.wrapperdiv').stop().slideToggle('slow',function(){

        var window_width = $(window).width();

        

        var content_inners_width = window_width*(99/100);

        $('.content_inners').css("width", content_inners_width);    

        if($('.wrapperdiv').is(":visible")){

            $('.wrapperdivleft').css("width", "250");

            $('.wrapperdivright').css("width", (content_inners_width-250));

            $('.toggleleftwrapper').removeClass('openarrow');

            $('.toggleleftwrapper').text('Close');

        }else{

            $('.wrapperdivleft').css("width", "0");

            $('.wrapperdivright').css("width", (content_inners_width));

            $('.toggleleftwrapper').addClass('openarrow');

            $('.toggleleftwrapper').text('Open');

        }

    });

});

//End Toggle Left Menu   

//for menu div to be displayed



   $(document).ready(function(){ 

   

   //for grid display view in application

   

   

	$('.main_view_nor').add('.main_view_alt').each(function(){

		var v801 = $(this).find('.width_80:eq(0)').height();

		var v802 = $(this).find('.width_80:eq(1)').height();

		var v201 = $(this).find('.width_20:eq(0)').height();

		var v202 = $(this).find('.width_20:eq(1)').height();

		var myArray =  new Array();

	  myArray = [v801,v802,v201,v202];

		var maxValueInArray = Math.max.apply(Math, myArray);

	  //console.log(myArray);

		//console.log('>>'+maxValueInArray);

		

		

		//var finalheight = v801;

		//if(v802 != ''){

		//finalheight = (v801>v802)?v801:v802;

		//}

		if(maxValueInArray>0) {

			$(this).find('.width_20').height(maxValueInArray);

			$(this).find('.width_80').height(maxValueInArray);

		}

		//$(this).prev().height($(this).height());

		});

	

   

    var selected_obj = $('li[menu-url="/sentrifugo/index.php/welcome"]');

    var parent_div = selected_obj.attr("parent-div");     

    

    var controllerName = 'index';

    if(parent_div == '' || parent_div == null)

    {

        if(controllerName != 'error'){   

                									selected_obj = $("li[menu-url='http://localhost/sentrifugo/index.php/index']"); 

				                     

                        }else{ // for not authorized pages.



        }

	 parent_div = selected_obj.attr("parent-div"); 



    }



    if(parent_div == 'undefined') parent_div = '';

    /*Only for Service Desk */

    if(parent_div == '' || parent_div == null)

    {   

		selected_obj = $("li[menu-url='<?php echo base_url() ?>']"); 

		if(controllerName == 'servicerequests') {

						selected_obj = $("li[menu-url='http://localhost/sentrifugo/index.php/servicerequests/index']"); 

		} 

		parent_div = selected_obj.attr("parent-div");

    }//only for service desk

   



    selected_obj.addClass("active_menu_class");

    $('.'+parent_div).addClass("selected_menu_class");

    $('.'+parent_div).show();



$('.acc_li_toggle').next().hide();

parent_menu_selected(selected_obj);



//removing of class for selected child menu

$(".side-menu-selected").removeClass("side-menu-selected");

//end of removing of class for selected child menu



//to add selected class for selected child menu

if(parent_div != "dummy")

    selected_obj.find("a").addClass("side-menu-selected");

//end to add selected class for selected child menu



//to add selected class for leave tabs

//end



//hide and show meu arrows by mouse events



$( "#menu-shadow" ).mouseenter(function(e) {

	var width = 1400;

	 

			//width = 1250; 

	 

			//width = 1400;	

				

	if($('.menu-head').width() > width){ //hide scroll arrows if window width > 1310

		$('.simply-scroll-btn').hide();

	}else{

		$('.simply-scroll-btn').show();

	}	

});



$( "#menu-shadow-analytics" ).mouseenter(function(e) {

		$('.simply-scroll-btn').show();

});



$("#menu-shadow,#menu-shadow-analytics").mouseleave(function(e){

	$('.simply-scroll-btn').hide();	

});



$("#mainmenushowhidebutton").click(function(){

	

	setdisplaymenu('display');

});

});

function  setdisplaymenu(flag)

{

    if(flag == 'tour')

    {

            hideshow_mainmenu = 1;

    }else{

            if(hideshow_mainmenu == 1) hideshow_mainmenu = 0;

            else if(hideshow_mainmenu == 0) hideshow_mainmenu = 1;

    }



    $.ajax({

            type:"post",

            data:'hideshow_mainmenu='+hideshow_mainmenu,

            url:base_url+'/index/setsessionval',

            dataType:'json',

            success: function(response)

            {

                if(response == 1)

                {

                    $( "#menu-shadow" ).show(400); 

                    $('#menu-hide-show').css('top','-1px');									 

                    $('#mainmenushowhidebutton').children().addClass('show-menu');

                    $('#mainmenushowhidebutton').children().text('Click Here to Hide Menu');

                    $('#mainmenushowhidebutton').children().removeClass('hide-menu');  

                }

                else if(response == 0)

                {

                    $( "#menu-shadow" ).hide(400);  

                    $('#menu-hide-show').css('top','0');									 				

                    $('#mainmenushowhidebutton').children().addClass('hide-menu');

                    $('#mainmenushowhidebutton').children().text('Click Here to Show Menu');

                    $('#mainmenushowhidebutton').children().removeClass('show-menu');  

                }

            }

    });

}

function togglesubmenus(id) {

	$('#acc_li_toggle_'+id).next().toggle();

	if ($('#acc_li_toggle_'+id).next().is(":visible") == true){

		$('#acc_li_toggle_'+id).removeClass('acc_li_toggle');

		$('#acc_li_toggle_'+id).addClass('acc_li_toggle_down');

	}else{

		$('#acc_li_toggle_'+id).removeClass('acc_li_toggle_down');

		$('#acc_li_toggle_'+id).addClass('acc_li_toggle');

	}

}



function parent_menu_selected(selected_obj)

{

    //start for removing selected class in parent menu

    var already_selected_obj = $('.super_selected').parent().parent();

    var already_selected_id = already_selected_obj.prop('id');

    var already_selected_class = already_selected_obj.attr("selected-class");

    $('#'+already_selected_id+" span").removeClass(already_selected_class);

    $('#'+already_selected_id+" span").removeClass("super_selected");

    $('#'+already_selected_id).removeClass("link-selected");

	var dashboard_menu = 'main_parent_173'; 

	 if(already_selected_id == undefined)  //when dashboard selectes undefined will come

    {

        $('#'+dashboard_menu).removeClass("link-selected");

    }

    //end for removing selected class in parent menu



    //to add selected class for parent menu

    var super_parent = selected_obj.attr("super-parent");

    var super_selected_class = $('#'+super_parent).attr("selected-class");

    $('#'+super_parent+" span").addClass(super_selected_class);

    $('#'+super_parent+" span").addClass("super_selected");

    $('#'+super_parent).addClass("link-selected");

    //end to add selected class for parent menu

    

    var primary_parent = selected_obj.attr("primary_parent");



    if(primary_parent !='' && typeof(primary_parent) !='undefined')

    {

    	togglesubmenus(primary_parent);

    }

        

}

</script>				


<!--
<div class='left_dashboard ml-alert-1-info'><div class='style-1-icon info'></div>You have not configured your widgets.

				<a href='http://localhost/sentrifugo/index.php/viewsettings/1'> Click here  </a>

				to configure.</div><div class="right_dashboard">

<div class="dashboard_birthday">

<div id="today_bday_name" class="to_daybirth no_birthday">No birthdays today. </div><div id="upcmng_bday_name" class="">

	</div>

<div class="no_announ no_birthday no_announ_bord">No Announcements</div>



	



</div>-->

<!-- Show all today birthdays when user click on more button -->




<div class="total-form-controller">

<div id="error_message" style="display:none;"></div>










	
	<?php
	if($employee->num_rows() > 0)
	{
	
	?>

    <form name="organisationinfo" id="formid" action="<?php echo base_url() ?>home/update_employee/<?php echo $employee_id?>" method="post" enctype="multipart/form-data" >
<!--<input type="hidden" name="id" value="" id="id">    <input type="hidden" name="user_id" value="" />	-->

	<div class="separetor-heading"><span class=""><u>Employee Details</u></span></div>

	<!-- start of organisation head details -->








	
<!--
    <div class="new-form-ui">

        <label class="required">Employee Code</label>

        <div class="division">
<input type="text" name="employeeId" id="employeeId" value="EMPP" class="formDataElement" readonly onfocus="this.blur()">            <span id="errors-employeeId" class="errors"></span>

        </div>

    </div>-->


    <div class="new-form-ui">

        <label class="required">Employee Id</label>

        <div class="division">
<input type="text" name="employee_id" id="employeeNumId" value="<?php echo $employee_id;?>" class="formDataElement" disabled>            <!--<span id="errors-employeeNumId" class="errors"></span>-->

        </div>

    </div>    

	

	<!-- <div class="new-form-ui">

	  <label class="required">Organization Head </label>

		<div class="division">			

							<span class="errors" id="errors-"></span>

						

		</div>	   

	</div>-->
	
	<div class="separetor-heading"><span class="" style="margin-left: 38%"><u>Personal Section</u></span></div>
	
	
	
	
	
	 <div class="new-form-ui">

        <label>Prefix </label>

        <div class="division">
<select name="initial" id="prefix_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $initial;?>" label="<?php echo $initial;?>"><?php echo $initial;?></option>
    <?php if($initial != "Mr") {?> <option value="Mr" label="Mr">Mr</option><?php } ?>
    <?php if($initial != "Mrs") {?> <option value="Mrs" label="Mrs">Mrs</option><?php } ?>
    <?php if($initial != "Ms") {?> <option value="Ms" label="Ms">Ms</option><?php } ?>
</select>                        

        </div>

    </div>

	<div class="new-form-ui">

	  <label class="required">First Name </label>

		<div class="division">
<input type="text" name="fname" id="firstname_orghead" value="<?php echo $fname;?>" maxLength="50" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">			

						

		</div>	   

	</div>
	
	<div class="new-form-ui">

	  <label class="">Middle Name </label>

		<div class="division">
<input type="text" name="mname" id="firstname_orghead1" value="<?php echo $mname;?>" maxLength="50" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">		

						

		</div>	   

	</div>

	<div class="new-form-ui">

	  <label class="required">Last Name </label>

		<div class="division">
<input type="text" name="lname" id="lastname_orghead" value="<?php echo $lname;?>" maxLength="50" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">		

						

		</div>	   

	</div>

	

   
    
    
    <div class="new-form-ui">

        <label>Maritial Status </label>

        <div class="division">
<select name="mstatus" id="prefix_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $mstatus;?>" label="<?php echo $mstatus;?>"><?php echo $mstatus;?></option>
   <?php if($mstatus != "Married") {?><option value="Married" label="Married">Married</option><?php } ?>
    <?php if($mstatus != "Single") {?> <option value="Single" label="Single">Single</option><?php } ?>
    <?php if($mstatus != "Divorced") {?> <option value="Divorced" label="Divorced">Divorced</option><?php } ?>
</select>                        

        </div>

    </div>
    
     <div class="new-form-ui">

        <label>Nationality </label>

        <div class="division">
<select name="nationality" id="prefix_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $nationality;?>" label="<?php echo $nationality;?>"><?php echo $nationality;?></option>
    <?php 
	foreach($country->result() as $row)
	{
		?>

    <?php if($nationality != $row->name) {?><option value="<?php echo($row->name)?>" label="<?php echo($row->name)?>"><?php echo($row->name)?></option><?php }?>
    <?php } ?>
   
</select>                        

        </div>

    </div>
    
    
     <div class="new-form-ui">

        <label class="required">Date Of Birth </label>

        <div class="division">
<input type="text" name="dob" id="date_of_birth" value="<?php echo $dob;?>" class="brdr_none"  <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>
        <script type="text/javascript">

            $(document).ready(function(){

                var yearrange = '1900:2020';

                //  var yearrange = '1989:2019';

                $('#date_of_birth').datepicker({

                    showOn:'both',

                    //maxDate: new Date,

                    yearRange: yearrange,

                    dateFormat: 'dd-mm-yy',

                    buttonImage: "<?php echo base_url()?>media/images/cal.jpg",

                    buttonImageOnly: true,

                    buttonText: "",

                    changeMonth: true,

                    changeYear: true,

                    showButtonPanel: true ,

                    onClose:function(){

                        //from_to_date_validation_org('org_startdate','date_of_joining_head',this,'Date of joining should be greater than organization started on.');

                        validateorgheadjoiningdate();

                        $('#date_of_birth').trigger('blur');

                    }

                });

            });//end of ready function

        </script>

    
    <div class="new-form-ui">

        <label>Gender </label>

        <div class="division">
<select name="gender" id="prefix_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $gender;?>" label="<?php echo $gender;?>"><?php echo $gender;?></option>
   <?php if($gender != "Male") { ?> <option value="Male" label="Male">Male</option><?php } ?>
    <?php if($gender != "Female") { ?><option value="Female" label="Female">Female</option><?php } ?>
    <?php if($gender != "Others") { ?><option value="Others" label="Others">Others</option><?php } ?>
</select>                        

        </div>

    </div>
    
      
            <div class="new-form-ui">

        <label class="required">Primary Phone </label>

        <div class="division">
<input type="text" name="pnumber" id="phone" value="<?php echo $pnumber;?>" maxlength="10" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>
            

      <div class="new-form-ui">

        <label class="required">Primary Email </label>

        <div class="division">
<input type="text" name="pemail" id="emailaddress" value="<?php echo $pemail;?>" class="formDataElement" disabled></div>

            </div>
            
             <div class="new-form-ui">

        <label class="">Secondary Phone </label>

        <div class="division">
<input type="text" name="snumber" id="phone" value="<?php echo $snumber;?>" maxlength="10" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>
            

      <div class="new-form-ui">

        <label class="">Secondary Email </label>

        <div class="division">
<input type="text" name="semail" id="emailaddress" value="<?php echo $semail;?>" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>
   
   <div class="new-form-ui">

        <label class="required">Aadhar Number </label>

        <div class="division">
<input type="text" name="aadhar" id="phone" value="<?php echo $aadhar;?>" maxlength="12" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>
    
    
    <div class="new-form-ui">

        <label class="required">PAN Number </label>

        <div class="division">
<input type="text" name="pan" id="" value="<?php echo $pan;?>" maxlength="10" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>
            
             <div class="new-form-ui">

        <label class="required">Account Number </label>

        <div class="division">
<input type="text" name="acnumber" id="phone" value="<?php echo $acnumber;?>" maxlength="16" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>
             <div class="new-form-ui">

        <label class="">Passport Number </label>

        <div class="division">
<input type="text" name="passport" id="" value="<?php echo $passport;?>" maxlength="10" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>
            
            <div class="new-form-ui textareaheight">

	  <label>Employment History </label>

	<div class="division">
<textarea name="ehistory" id="description" value="" rows="10" cols="50" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></textarea></div>

	  	</div>
	  		

<div class="new-form-ui textareaheight">

	  <label>Address</label>

	<div class="division">
<textarea name="address" id="description1" value="" rows="10" cols="50" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></textarea></div>

	  	</div>
	  	
	  	<script>
			document.getElementById("description").value = "<?php echo $ehistory;?>";
			</script>
			<script>
			document.getElementById("description1").value = "<?php echo $address;?>";
			</script>
	
	  	
	  	  	
	  	  	  	
	  	  	  	  	  	

<div class="separetor-heading"><span class="" style="margin-left: 38%"><u>Work Section</u></span></div>
	
    
    
       <div class="new-form-ui">

        <label class="required">Date of Joining </label>

        <div class="division">
<input type="text" name="doj" id="date_of_joining_head" value="<?php echo $doj;?>" class="brdr_none"  <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()"></div>

            </div>

        <script type="text/javascript">

            $(document).ready(function(){

                var yearrange = '1900:2020';

                //  var yearrange = '1989:2019';

                $('#date_of_joining_head').datepicker({

                    showOn:'both',

                    //maxDate: new Date,

                    yearRange: yearrange,

                    dateFormat: 'dd-mm-yy',

                    buttonImage: "<?php echo base_url()?>media/images/cal.jpg",

                    buttonImageOnly: true,

                    buttonText: "",

                    changeMonth: true,

                    changeYear: true,

                    showButtonPanel: true ,

                    onClose:function(){

                        //from_to_date_validation_org('org_startdate','date_of_joining_head',this,'Date of joining should be greater than organization started on.');

                        validateorgheadjoiningdate();

                        $('#date_of_joining_head').trigger('blur');

                    }

                });

            });//end of ready function

        </script>
            

    <div class="new-form-ui">

        <label class="required">Employment Status</label>

        <div class="division">
<select name="estatus" id="jobtitle_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $estatus;?>" label="<?php if($estatus==1)echo "Active";else echo "Inactive";?>"><?php if($estatus==1)echo "Active";else echo "Inactive";?></option>
   <?php if($estatus != 1) {?> <option value="1" label="Active">Active</option><?php } ?>
    <?php if($estatus != 0) {?> <option value="0" label="Inactive">Inactive</option><?php } ?>
</select>                                 <!--<span class="errors" id="errors-jobtitle_id">Job titles are not configured yet.</span>-->

              

        </div>

    </div>
    
    <?php 
	$this->load->model('Main');
	$rolename1 =$this->load->Main->rolename($role);
	?>
    
    

    <div class="new-form-ui">

        <label class="required">Role </label>

        <div class="division">
<select name="role" id="emprole" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $role;?>" label="?php echo $rolename1;?>"><?php echo $rolename1;?></option>
     <?php 
	foreach($rolename->result() as $row)
	{
	    if($role != $row->id)
        {
		?>
    <option value="<?php echo($row->id)?>" label="<?php echo($row->name)?>"><?php echo($row->name)?></option>
    <?php } } ?>
    
    
    
</select></div>

              </div>

           
      
    <div class="new-form-ui">

        <label class="required">Employment Type</label>

        <div class="division">
<select name="etype" id="jobtitle_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $etype;?>" label="<?php echo $etype;?>"><?php echo $etype;?></option>
   <?php if($etype != 'Permanent') {?> <option value="Permanent" label="Permanent">Permanent</option><?php } ?>
    <?php if($etype != 'Contract') {?> <option value="Contract" label="Contract">Contract</option><?php } ?>
</select>                                 <!--<span class="errors" id="errors-jobtitle_id">Job titles are not configured yet.</span>-->

              

        </div>

    </div>

    <div class="new-form-ui">

        <label class="required">Designation </label>

        <div class="division">
<select name="designation" id="position_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $designation1;?>" label="<?php echo $designation1;?>"><?php echo $designation1;?></option>
	<?php
	foreach($designation->result() as $row)
	{
		if($designation1 != $row->DesignationName)
		{
			?>
			<option value="<?php echo($row->DesignationName)?>" label="<?php echo($row->DesignationName)?>"><?php echo($row->DesignationName)?></option>
		<?php } } ?>
</select>                               <!--  <span class="errors" id="errors-position_id">Positions are not configured yet.</span>-->

        	        

        </div>

    </div>
    
    <div class="new-form-ui">

        <label class="required">Department </label>

        <?php

            $this->load->model('Main');
            $departmentname=$this->Main->getdepartmentname($department);
        ?>


        <div class="division">
<select name="department" id="position_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $department;?>" label="<?php echo $departmentname;?>"><?php echo $departmentname;?></option>
    <?php
    foreach($departments->result() as $row)
    {
        if($department != $row->DeptId)
        {
        ?>
        <option value="<?php echo($row->DeptId)?>" label="<?php echo($row->DeptName)?>"><?php echo($row->DeptName)?></option>
    <?php } } ?>

</select>                               <!--  <span class="errors" id="errors-position_id">Positions are not configured yet.</span>-->

        	        

        </div>

    </div>

    <div class="new-form-ui">

        <label class="required">Billing Type </label>

        <div class="division">
<select name="billing" id="position_id" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?> onChange="enable()">
    <option value="<?php echo $billing;?>" label="<?php echo $billing;?>"><?php echo $billing;?></option>
    <?php if($billing != 'Billing') {?> <option value="Billing" label="Billing">Billing</option><?php }?>
    <?php if($billing != 'Non Billing') {?> <option value="Non Billing" label="Non Billing">Non Billing</option><?php }?>
</select>                               <!--  <span class="errors" id="errors-position_id">Positions are not configured yet.</span>-->

        	        

        </div>

    </div>
    
    
    <div class="separetor-heading" ><span class="" style="margin-left: 38%"><u>Other Details</u></span></div>
    
     <div class="new-form-ui">

        <label class="">Medical Insurance Number </label>

        <div class="division">
<input type="text" onChange="enable()" name="minumber" id="" value="<?php echo $minumber;?>" maxlength="10" class="formDataElement" <?php if($this->session->userdata('rolemodify')!="Y"){echo "disabled";}?>></div>

            </div>
    



	
		

<!-- end of organisation head details -->		

        

    

        

        

        
<?php 
	$rolemodify=$this->session->userdata('rolemodify');
	if($rolemodify=="Y")
{
	?>

        <div class="new-form-ui-submit">

		
<input type="submit" name="submit" id="submitbutton" value="Save" hidden>		

		</div>
		<?php } ?>
		
		
		<script>
			function enable()
			{
				var btn=document.getElementById('submitbutton');
				btn.hidden=false;
			}
		
	</script>
	
	<?php } else 
	{
		echo '<div class="separetor-heading"><span class=""><center>Employee Details Not Found</center></span></div>';
	}
		?>
	
	
</form>

</div>


















<input type="hidden" id="today_birthdays" value='[]' />

</div>



<script type="text/javascript">

//$(document).ready

$( document ).ready(function() {

	var window_width = $('.interview_shed_block').width();

    var interview_shed_block = window_width*(99/100);

    $('.interview_shed_box').css("width", (interview_shed_block-233));	   



   $(window).resize(function() {

	   var window_width = $('.interview_shed_block').width();

	    var interview_shed_block = window_width*(99/100);

	    $('.interview_shed_box').css("width", (interview_shed_block-233));	   

  });



   $(".interview_shed_box").show();

	// Show all today birthdays when user click on more button

	$("#more_today_bdays").click(function() {

		$("#today_bday_name").hide();

		$("#more_today_bdays").hide();

		var today_birthdays_html = '';

		today_birthdays = JSON.parse($("#today_birthdays").val());

		today_birthdays_html +="<ul class='today_bday_list'>";

		var size= today_birthdays.length;

		for (x in today_birthdays) {

			var firstname = today_birthdays[x].firstname;

			var firstname1 =  today_birthdays[x].firstname.substring(0, 6);

			today_birthdays_html += '<li title="'+firstname+'">'+ firstname1 ;

			//to remove ',' for last name

			if(x == size-1)

			today_birthdays_html += "</li>";

			else

			today_birthdays_html += ",</li>";	

		}

		today_birthdays_html +="</ul>";

		$("#today_bday_name").html(today_birthdays_html).slideDown("slow");

	}); 



	// Show all upcoming birthdays when user click on more button

	$("#more_upcmng_bdays").click(function() {

		$("#upcmg_limit").hide();

		$("#view_more_upcmng").show();

		$("#more_upcmng_bdays").hide();

		

	});  		



});



</script>

 			                                                                               
 			                                                                                               
					</div>
                   
                  

                   </div>

		         <div style="clear: both;"></div>

               </div>

           	</div>

		</div>

	</div>

</div>

	<div style="height: 20px;">&nbsp;</div>

</div>			

       
       
       

        <div class="copytxt">

        	<div class="copy-center"><span class="copy_left">&copy; <?php echo date("Y").' '.SiteName; ?> | All Rights Reserved</span><span class="copy_right"></span></div>

         </div>   

			<div id="footer">                        

				<div id="quickview" style="display:none"></div>

				<div id="dialog" title="Confirmation Required" style="display: none; box-shadow: 0 3px 3px rgba(0, 0, 0, 0); min-height:20px !important; padding-top: 15px;">

				    <div id="dialogText"></div> 

                 </div>
<!--
				<div class="footerdivbg">

										<a class="settings" href="http://localhost/sentrifugo/index.php/viewsettings/1">

						<img width="18" height="19" border="0" src="http://localhost/sentrifugo/public/media/images/settings_icon.png"  title="Widgets" />

                    </a>                     					

                    <!-- Added by sapplica Here we are displaying the recently clicked tabs by the user -->					
<!--
						<div class="recentviewd"><label id="recentviewtext">Recently viewed</label><ul><li><span id="redirectlink"  title = "Profile" onclick ="redirecttolink('dashboard/viewprofile','');">Profile</span><a href="javascript:void(0);" onClick="closetab(this,'dashboard')"></a></li><li><span id="redirectlink"  title = "Leave Request" onclick ="redirecttolink('leaverequest/index','');">Leave Request</span><a href="javascript:void(0);" onClick="closetab(this,'leaverequest')"></a></li><li><span id="redirectlink"  title = "Settings" onclick ="redirecttolink('servicedeskconf/index','');">Settings</span><a href="javascript:void(0);" onClick="closetab(this,'servicedeskconf')"></a></li></ul></div>				</div>
-->
                

		</div>

				</div>

	</div>



<!-- website tour html START -->

<div id="tourcontrols" class="tourcontrols" style="display:none;">

	

    <p>Welcome to Sentrifugo !!

    	<br />

    	Here for the first time?

    	<br />

    	For the best Sentrifugo tour experience, please maximize your browser.

    </p>

	<span class="button" id="activatetour">Start the tour<b class="start-tour-icon"></b></span>

	<div class="nav">

		<span class="button" id="prevstep" style="display:none;"><b>&lsaquo;</b> Previous</span>

		<span class="button" id="nextstep" style="display:none;">Next <b>&rsaquo;</b></span>

	</div>

    <div class="fltleft">

        <a id="restarttour" style="display:none;">Restart the tour</a>

        <b id="separator-tour">|</b>

        <a id="endtour" style="display:none;">End the tour</a>

    </div>

	<span class="close" id="canceltour"></span>

</div>

<!-- website tour html END -->



<script type="text/javascript" src="<?php echo base_url() ?>media/jquery/js/jquery.form_3.39.js"></script><!-- added on 07-aug-2013 by rama krishna -->

<script type="text/javascript" src="<?php echo base_url() ?>media/jquery/js/jquery.blockUI_2.64.js"></script><!-- added on 07-aug-2013 by rama krishna -->

<script type="text/javascript" src="<?php echo base_url() ?>media/jquery/js/flexmenu.min.js"></script>

<script type="text/javascript" language="javascript">

$(document).ready(function() {

 /* Making window responsive*/

 	var complete_empwidth = $('.emp-screen-view').width();

	$('#displayimg').css("width", "150");

	$('#personalDetailsDiv').css("width", (complete_empwidth-(152)));	

		

	 function checkempWidth() {

        var complete_empwidth = $('.emp-screen-view').width();		

		$('#displayimg').css("width", "150");

		$('#personalDetailsDiv').css("width", (complete_empwidth-(152)));		

    }

	

	/* Making window responsive*/

 	var complete_width = $('.poc-ui-data-control').width();

	$('.left-block-ui-data').css("width", "230");

	$('.right-block-data').css("width", (complete_width-(263)));	

		

	 function checkWidth() {

        var complete_width = $('.poc-ui-data-control').width();		

		$('.left-block-ui-data').css("width", "230");

		$('.right-block-data').css("width", (complete_width-(263)));		

    }

	

	

	function checknew1Width() {

        var complete_width = $('.short-ui-full-1').width();		

		$('.short-ui-full-1 label').css("width", "160");

		$('.short-ui-full-1 .division1').css("width", (complete_width-(190)));	

    }



	/* Making window responsive*/

 	var complete_width = $('.short-ui-full-1').width();

	$('.short-ui-full-1 label').css("width", "160");

	$('.short-ui-full-1 .division1').css("width", (complete_width-(190)));	

	

	 

	$(window).resize(function() {

		checkWidth();

		checkempWidth();

		checknew1Width();

	});



	/*	Start

		Code to redirect directly to leave request page

		If action name is not viewsettings.

	*/

				$( "#main_parent_"+4 ).click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'leaverequest/';

		});	

		$( "#main_parent_"+3 ).click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'home/myleave';

		});

		$( "#main_parent_"+1 ).click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'organisationinfo/';

		});

		$( "#main_parent_"+70 ).click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'sitepreference/';

		});

		$( "#main_parent_logs").click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'userloginlog/';

		});

		$( "#main_parent_"+5 ).click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'home/reports';

		});

		$( "#main_parent_"+19 ).click(function() {



			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'home/approvals';

		});

		$( "#main_parent_"+185 ).click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'expenses/expenses';

		});

		

		$( "#main_parent_"+186 ).click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'assets/assets';

		});

		

		$( "#main_parent_"+143 ).click(function() {

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

							window.location.href = base_url+'home/mytime';

					});

		

		$( "#main_parent_"+201 ).click(function() {

			var dismethod = 'disciplinaryincident';

			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+dismethod+'/';

		});



		$( "#main_parent_"+149 ).click(function() {



			$('.wrapperdivright').html('');

			$.blockUI({ width:'50px',message: $("#spinner").html() });

			window.location.href = base_url+'home/attendance';

		});

		

		

		/*

		End

	*/

	$('ul.menu.flex').flexMenu();

});	





</script>

<!-- The JavaScript for website tour START -->

<script type="text/javascript" src="<?php echo base_url() ?>media/js/jquery.visible.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>media/js/joyride.js"></script>

<!-- The JavaScript for website tour END -->

<!--

For the working of popups in logmanager, 

the code from logmanager/index.phtml has been moved here

because json file and html file both are same.

Dated: 27-02-2014

-->

<div id="logmanagerContainer" style="display: none; overflow: auto;">

	<div class="heading">

		<a href="javascript:void(0)">

        	<img src="<?php echo base_url() ?>media/images/close.png" name="" align="right" border="0" hspace="3" vspace="5"	class="closeAttachPopup" style="margin: -24px 8px 0 0;">

         </a>

	</div>

	<iframe id="logmanagerCont" class="business_units_iframe" frameborder="0"></iframe>



</div>

</div>

          </div>

        </div>

      </div>
      
      
    
      
        
          
            
              
     
                  
                               
                                                         
      
      
	

      
      
      
      
      
      

</body>



</html>



<script type='text/javascript'>

if ($('#upload_custom_div_profile').length)

{

	var btnUpload = $('#upload_custom_div_profile');

    new AjaxUpload(btnUpload, {

    action :  base_url+'/dashboard/uploadpreview',

	name   : 'profile_photo',  //we can rename it 

	dataType: 'json',

	onSubmit: function(file,ext){

	if($(".uploaderror_profile").is(":visible"))

	 $(".uploaderror_profile").hide();

	  $("#loaderimgprofileedit").show();

									 

	},

	onComplete: function(file, response){

	    var result = JSON.parse(response);

      	if(result.result == 'success')

		{

		    

			$('.chg-img_profile').show();

			$("#uploadimagepathedit").val(result.img);

			$('.chg-img_profile').html('<img src="http://localhost/sentrifugo/public/uploads/preview/'+result.img+'" width="50" height="50"/>');

			$("#profile_edit").show();

			$("#loaderimgprofileedit").hide();

		}

		else

		{

			$('.uploaderror_profile').show();

			if(result.msg)

			 $('.uploaderror_profile').html(result.msg);

			else

             $('.uploaderror_profile').html("Please choose different file."); 			

			$("#loaderimgprofileedit").hide();

			setTimeout(function()

			{

			$('.uploaderror_profile').fadeOut('slow');

			},3000);

		}

		}	

	},'json');

}

</script>


























