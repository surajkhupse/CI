<h2><b>Edit Task </b></h2>

<?php  $attributes = array('id'=>'Edit_form','class'=>'form_horizontal'); ?>


<?php  echo validation_errors("<p class='bg-danger'>");?>

<?php  echo form_open('tasks/edit/'. $this->uri->segment(3).'',$attributes);?>

<!--For First name -->
<div class="form-group">
<?php  echo form_label('Task Name');?>

<?php  $data=array(
'class'=>'form-control',
'name'=>'task_name',
'placeholder'=>'Enter Task Name'); ?>

<?php  echo form_input($data);?> 

</div>

<div class="form-group">

<?php  echo form_label('Task Description')?>

<?php  $data= array(
	  
	   'class'=>'form-control',
	   'name'=>'task_body',
);
?>
<?php  echo form_textarea($data);?>

</div>
<div class="form-group">

<?php  $data= array(
	  
	   'class'=>'form-control',
	   'name'=>'due_date',
	   'type'=>'date'
);
?>

<?php  echo form_input($data);?>

</div>


<div class="form-group">

<?php 

$data=array(
	'class'=>'btn btn-primary',
	'name'=>'Submit',
	'value'=>'Create'
);?>

<?php echo form_submit($data);?>

</div>

<?php  echo form_close();  ?>

