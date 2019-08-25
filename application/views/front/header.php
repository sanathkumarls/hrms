<!DOCTYPE html>
<html lang="en">

  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo SiteName?></title>

      <link rel="shortcut icon" href="<?php echo base_url()?>img/logo.png" />
     <!--Bootstrap core CSS-->
    <link href="<?php echo base_url();?>dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url();?>dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>dashboard/css/sb-admin.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
		
       <div class="container">
       	<?php echo "<h2 style='color:white'>".SiteName."</h2>" ;?>
       </div>
<?php if($this->session->userdata('useremail') != '' && $this->session->userdata('username') != '' && $this->session->userdata('rolename') != '' && $this->session->userdata('rolemodify') != '' && $this->session->userdata('roleadd') != '')
		{
      echo '
     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i> '
           .$this->session->userdata("username").
          ' </a>
		  
		  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		  
            <a class="dropdown-item" href="'.base_url().'/home/logout"><i class="fa fa-sign-out"></i> Logout</a>
          </div>
		  
     ';
		}
       ?>
       
      
      <!--to display domain name-->
    </nav>