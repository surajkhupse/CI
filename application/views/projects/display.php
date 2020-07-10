
<div class="col-xs-9">

<h1> Project Name: <?php  echo "$project_data->project_name";   ?>   </h1>
<p>Date Created <?php  echo "$project_data->date_created";     ?>   </p>

<h3>Description</h3>
<p> Project Name: <?php  echo "$project_data->project_body";   ?>   </p>

<h3> Task</h3>

     <?php if($completed_tasks): ?>

            <?php foreach($completed_tasks as $task):?>

                <?php  echo $task->task_id; ?>

            <?php endforeach; ?>

       <?php endif; ?>
		
		 

</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">

   <h4>Project Action</h4>
   <li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id; ?>">Create Task</a></li>
   <li class="list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a></li>
   <li class="list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id; ?>">Delete project</a></li>



</ul>
</div>
