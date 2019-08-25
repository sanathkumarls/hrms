<?php
$rolename=$this->session->userdata('rolename');
$rolemodify=$this->session->userdata('rolemodify');
$roleadd=$this->session->userdata('roleadd');
$developer=$this->session->userdata('developer');
?>


<br><br>
<!------ Include the above in your HEAD tag ---------->












<div class="row">
  <div class="col-sm-4">
  <div class="container">
  <div class="row justify-content-center">
  	<div class="panel panel-primary"><br>
      <div class="panel-heading"><i class="fas fa-user-circle fa-fw"></i>Employee Information :</div>
      <div class="panel-body"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rolename;?></div>
    </div>
	  </div>
  </div>
  
  </div>
  
  <?php if($roleadd=="Y") echo '
  <div class="col-sm-3">
  <div class="container">
  <div class="row justify-content-center">
  	<div class="panel panel-primary"><br>
      <div class="panel-heading"><a href=""><button type="button" class="btn btn-primary">Add New Employee</button></a></div>
      
    </div>
	  </div>
  </div>
  
  </div>'?>
  
  <div class="col-sm-5">
  	
  	
<div class="container">
    
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Employee Name">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
  	
  	
  </div>
</div>
 
 
 
 
 
 

  <div class="jumbotron">
   
    <div class="row">
                <div class="col-xs-12 " style="width: 100%">
                  <nav> 
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">My Time</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">My Leave</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Report</a>
                      <a class="nav-item nav-link" id="nav-approvals-tab" data-toggle="tab" href="#nav-approvals" role="tab" aria-controls="nav-approval" aria-selected="false">Approvals</a>
                      
                      
                      
                      
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0"  id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      
                     
                      <div class="well well-sm" style="background: #0866F7;text-align: center;color: aliceblue;">Employee Profile</div>
                      
                      <div class="row">
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Employee Id</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 					 	<div class="col-sm-1">
							<div class="form-group">
    							<label>Initial</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>First Name</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Middle Name</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Last Name</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Maritial Status</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 
 						 <div class="col-sm-1">
							<div class="form-group">
    							<label>Gender</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 
 						 
					</div>
                      
                      
                      
						
						
						<div class="row">
						<div class="col-sm-2">
							<div class="form-group">
    							<label>Date Of Birth</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 					<div class="col-sm-2">
							<div class="form-group">
    							<label>Nationality</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Primary Email</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Primary Phone</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Secondary Email</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Secondary Phone</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 
						</div>
						
						<div class="row">
 					
 						 <div class="col-sm-6">
							<div class="form-group">
    							<label>Communication Address</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-6">
							<div class="form-group">
    							<label>Previous Employment History</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
						</div>
						
						<div class="row">
 					
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Aadhar Number</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>PAN</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Account Number</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-2">
							<div class="form-group">
    							<label>Passport Number</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
						</div>
						
						
						
						
						
						 <div class="row">       
      <div class="col-sm-5">
  </div>                   
  <?php if($rolemodify=="Y") echo '
  <div class="col-sm-2">
  <div class="container">
  <div class="row justify-content-center">
  	<div class="panel panel-primary"><br>
      <div class="panel-heading"><a href=""><button type="button" class="btn btn-primary">Modify</button></a></div>
      
    </div>
	  </div>
  </div>
  
  </div>'?>          
    </div> 
		<br>				
					
						
      <div class="well well-sm" style="background: #0866F7;text-align: center;color: aliceblue;">Contact/Work Details</div>
                
                      
             <div class="row">
 					
 						 <div class="col-sm-4">
							<div class="form-group">
    							<label>Joining Date</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-4">
							<div class="form-group">
    							<label>Employee Status</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-4">
							<div class="form-group">
    							<label>Employee Role</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
						</div>               
                           <div class="row">
 					
 						 <div class="col-sm-4">
							<div class="form-group">
    							<label>Employee Type</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-4">
							<div class="form-group">
    							<label>Employee Designation</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 <div class="col-sm-4">
							<div class="form-group">
    							<label>Department</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
						</div>       
                              <div class="row">
 					<div class="col-sm-4">
							<div class="form-group">
    							<label>Billing</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 
						</div>          
                                              
                  <div class="well well-sm" style="background: #0866F7;text-align: center;color: aliceblue;">Other Details</div>                  <div class="row">
 					<div class="col-sm-4">
							<div class="form-group">
    							<label>Medical Insurance Number</label>
  								  <input type="email" class="form-control" id="email">
 							</div>
 						 </div>
 						 
						</div>                
                                                                
                    
                     
              
          </div>
                    
                    
                    
                    
      
                      
                      
                      
       
              
                    
                    
                    
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-approvals" role="tabpanel" aria-labelledby="nav-approval-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                  </div>
                
                </div>
              </div>
	  
	 
	  
	  
	  
</div>
 
 
 
 

 

    
     
    