
<p class="bg-success">

<?php if($this->session->flashdata('login_success')):?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php endif;  ?>


<?php if($this->session->flashdata('user_register')):?>
<?php echo $this->session->flashdata('user_register'); ?>
<?php endif;  ?>


</p>

<p class="bg-danger">

<?php if($this->session->flashdata('login_failed')):?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php endif;  ?>

<?php if($this->session->flashdata('no_access')):?>
<?php echo $this->session->flashdata('no_access'); ?>
<?php endif;  ?>

</p>


<?php  if(isset($projects)): ?>

<div class="panel panel-primary">

<div class="panel-heading"><H3>Projects</H3></div>

<div class="panel-body">

 <ul class="list-group">
			
			
	  
		  <?php foreach($projects as $project): ?>
		   
		<li class="list-group-item"><a href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>">	
		   <?php  echo  $project->project_name  ;   ?>
		   
		  </a>

		  </li>
 
        
            <?php endforeach; ?>


		  <?php endif; ?>
		  </ul>

		  </div>
		  </div>
		  
		  


	 <?php  if(isset($tasks)) :?>
 
		<div class="panel panel-primary">

          <div class="panel-heading"><H3>Project Tasks</H3></div>

            
 <table class="table table-hover table-bordered table-responsive">

       
  <thead class="thead-light">
	        <th><h4>Project Name</h4></th>
			<th><h4>Task Name</h4></th>
	         <!-- <th><h4>Task Description</h4></th> -->

	 </thead>
	 
	 <tbody>
	 

		  <?php foreach($tasks as $task): ?>

			<tr>
		   
			<td><a href="<?php echo base_url();?>tasks/display/<?php echo $task->id; ?>"><?php  echo  $task->project_name  ;   ?></a> </td>
		    <td><b><?php  echo  $task->task_name  ;   ?> </b></td>
		   <!-- <td><?php  echo  $task->task_body  ;   ?> </td> -->
		   
 
       
            <?php endforeach; ?>
		  </tr>

		  <?php endif; ?>

		  </tbody>

		  </table>

		  

</div>
</div>
</div>

		  
