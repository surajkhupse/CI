<div>
	
  
<p><?php echo $this->session->flashdata('message'); ?> </p> 

     <?php  if($this->session->userdata('logged_in')):   ?>

        <div class="col-xs-3">

            <div class="user-pic">

			   <!-- <?php if($users->profile_photo){ ?> 

	            <img class="profile-img" src="<?php echo base_url();?>uploads/' .$users->profile_photo'"></img>

			   <?php } else { ?>
				 
				<img class="profile-img" src="<?php echo base_url();?>assets/image/index.png"></img> 

			   <?php } ?>  -->

	             <h2><b>Logout</b> </h2>

				 <div class="">
 
				 <img class="profile-img" src="<?php echo base_url();?>assets/image/index.png"></img> 

				 </div>
	             
          </div>
    
	 
		  <!-- <?php echo form_open('users/upload');?>

		  <?php

            $data= array(
               'class'=>'btn btn-primary',
                'id'=>'log-out',
              'name'=>'Submit',
                'value'=>'Upload'

            );
              ?>


		    <?php echo form_submit($data);?>
              <?php  echo  form_close(); ?> -->

				 
				
      

<?php echo form_open('users/logout');?>
<!-- 
<p>
<?php  if($this->session->userdata('username')):?>
<?php   echo "You are logged in as ". $this->session->userdata('username');  ?>
<?php endif;  ?>

</p> -->


	  
<?php

  $data= array(
	 'class'=>'btn btn-primary',
	 'id'=>'log-out',
	 'name'=>'Submit',
	 'value'=>'Logout'

  );
?>



<?php echo form_submit($data);?>
<?php  echo  form_close(); ?>
</div>




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
<!-- sdviod
<div class="form-group">

<?php  echo form_label('Conform Password');?>

<?php  $data=array(

'class'=>'form-control',
'name'=>'conform_password',
'placeholder'=>'Enter conform Password'



);?>
<?php echo form_password($data); ?>
</div> -->

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
