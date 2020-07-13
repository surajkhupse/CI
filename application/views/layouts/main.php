<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Codeigniter</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	 <script src="<?php echo base_url();?>assets/css/bootstrap.min.js"></script>
 
     

	 <!-- Custom Css and javascript -->

	 <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/style.css">
		  
      <script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/javascript.js"></script> 
		 
	
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-dashboard"></span> Codeigniter</a>
	</div>

    <ul class="nav navbar-nav">
	<li class="nav-item">
	<a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	  
	  <?php  if($this->session->userdata('logged_in')):   ?>

      <li class="nav-item"><a  href="<?php echo base_url();?>projects"><span class="glyphicon glyphicon-folder-open"></span>  Projects</a></li>
	  
	  <?php endif;?>
	  <!-- <li><a href="#">link1</a></li> -->
	  
	</ul>
	
	
    <ul class="nav navbar-nav navbar-right">
      <li><a  href="<?php echo base_url();?>users/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	 </ul>
	
	
	 <?php  if($this->session->userdata('logged_in')):   ?> 

	 <ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo base_url();?>users/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
	 <?php endif;?>


  </div>
</nav> 

	<div class="container">

		 <div class="col-xs-3">

         <?php $this->load->view('users/login_view'); ?>

        </div>

	    <div class="col-xs-9" id="col-xs-9">

	       <?php  $this->load->view($main_view);  ?>
	
	     </div>


	</div>




</body>
</html>
