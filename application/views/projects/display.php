
<div class="col-xs-12">

 <p class="bg-success"> 

 <?php if($this->session->flashdata('mark_done')):?>
<?php echo $this->session->flashdata('mark_done'); ?>
<?php endif;  ?>

 </p>

 <p class="bg-danger"> 

 <?php if($this->session->flashdata('mark_undone')):?>
<?php echo $this->session->flashdata('mark_undone'); ?>
<?php endif;  ?>

 </p>
 
 <div class="panel panel-primary">

<div class="panel-heading"><h1> Project Name: <?php  echo "$project_data->project_name";   ?>   </h1> </div>

<ul class="list-group">

 <li class="list-group-item">
<p>Date Created <?php  echo "$project_data->date_created";     ?>   </p>
 

<h3>Description</h3>

<p> Project Name: <?php  echo "$project_data->project_body";   ?>   </p>
 


 <a class='btn btn-primary' href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id; ?>/<?php echo $project_data->id; ?>">Create Task</a>

<a class="btn btn-primary" href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a>

<a  class="btn btn-danger" href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id; ?>">Delete</a>

</li>
 </ul>



 </div>



 
 <!-- Task Not Complete -->

 <div class="panel panel-warning">



 <div class="panel-heading">   <h3> Active Tasks</h3> </div>
		  <ul class="list-group">
     <?php if($not_completed_tasks): ?>

            <?php foreach($not_completed_tasks as $task):?>
				<li class="list-group-item">
			<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">

                <?php  echo $task->task_name; ?>
			</a>
			</li>
            <?php endforeach; ?>
			<?php else : ?>

			
			<li class="list-group-item">	<p> You have no active task</p> </li>

       <?php endif; ?>

	   </ul>

			</div>



 <!-- Complete task sections -->

 <div class="panel panel-success">


<div class="panel panel-heading"><h3> Completed Task</h3>  </div>
<ul class="list-group">
     <?php if($completed_tasks): ?>

            <?php foreach($completed_tasks as $task):?>
				<li class="list-group-item">
			<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">

                <?php  echo $task->task_name; ?>
			</a>
			</li>
            <?php endforeach; ?>
			<?php else : ?>

			<li class="list-group-item"><p> You have not tasks  pending</p> </li>

       <?php endif; ?>

	   </ul>
		
		 

</div>
</div>


