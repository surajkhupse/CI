

<h2><b>Register view</b></h2>
<?php  $attributes = array('id'=>'register_form','class'=>'form_horizontal'); ?>

<!-- <?php if($this->session->flashdata('errors')):  ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif;  ?> -->

<?php  echo validation_errors("<p class='bg-danger'>");?>

<?php  echo form_open('users/register',$attributes);?>

<!--For First name -->
<div class="form-group">
<?php  echo form_label('First Name');?>

<?php  $data=array(
'class'=>'form-control',
'name'=>'first_name',
'placeholder'=>'Enter First Name', 
'value'=> set_value('first_name')

); ?>

<?php  echo form_input($data);?>

</div>

<!--For Last Name -->
<div class="form-group">
<?php  echo form_label('Last Name');?>

<?php  $data=array(
'class'=>'form-control',
'name'=>'last_name',
'placeholder'=>'Enter Last Name'); ?>

<?php  echo form_input($data);?>

</div>


<!--For Email -->
<div class="form-group">
<?php  echo form_label('Email');?>

<?php  $data=array(
'class'=>'form-control',
'name'=>'email',
'placeholder'=>'Enter Your Email'); ?>

<?php  echo form_input($data);?>

</div>






<!--For usrname -->
<div class="form-group">
<?php  echo form_label('Username');?>

<?php  $data=array(
'class'=>'form-control',
'name'=>'username',
'placeholder'=>'Enter Username'); ?>

<?php  echo form_input($data);?>

</div>
<!--For password -->
<div class="form-group">

<?php echo form_label('Password'); ?>

<?php  $data=array(
	
	'class'=>'form-control',
	'name'=>'password',
	'placeholder'=>'Enter password');?>

<?php   echo form_password($data);  ?>  

</div>

<!--For conform password -->
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
	'value'=>'Register'
);?>

<?php echo form_submit($data);?>

</div>



<?php  echo form_close();  ?>

