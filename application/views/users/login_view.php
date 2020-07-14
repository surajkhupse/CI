<div>
	
<?php  if($this->session->userdata('logged_in')):   ?>

<h2><b>Logout</b> </h2>

<div class="col-xs-3">

      <div class="user-pic">
	   
	  <img class="" src="<?php echo base_url();?>assets/image/index.png"></img>

      </div>
</div>


<?php echo form_open('users/logout');?>
<p>

<?php  if($this->session->userdata('username')):?>

<?php   echo "You are logged in as ". $this->session->userdata('username');  ?>

<?php endif;  ?>

</p>

<?php

  $data= array(
	 'class'=>'btn btn-primary',
	 'name'=>'Submit',
	 'value'=>'Logout'

  );
?>

<?php echo form_submit($data);?>
<?php  echo  form_close(); ?>

<?php  else: ?>


<h2><b>Login view</b></h2>
<?php  $attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')):  ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif;  ?>




<?php  echo form_open('users/login',$attributes);?>


<div class="form-group">
<?php  echo form_label('Username');?>

<?php  $data=array(
'class'=>'form-control',
'name'=>'username',
'placeholder'=>'Enter Username'); ?>

<?php  echo form_input($data);?>

</div>

<div class="form-group">

<?php echo form_label('Password'); ?>

<?php  $data=array(
	
	'class'=>'form-control',
	'name'=>'password',
	'placeholder'=>'Enter password');?>

<?php   echo form_password($data);  ?>  

</div>
<div class="form-group">

<?php  echo form_label('Conform Password');?>

<?php  $data=array(

'class'=>'form-control',
'name'=>'conform_password',
'placeholder'=>'Enter conform Password'



);?>
<?php echo form_password($data); ?>
</div>

<div class="form-group">

<?php 

$data=array(
	'class'=>'btn btn-primary',
	'name'=>'Submit',
	'value'=>'Login'
);?>

<?php echo form_submit($data);?>

</div>



<?php  echo form_close();  ?>

<?php endif; ?>
</div>
