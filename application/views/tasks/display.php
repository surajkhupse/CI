<h1>Display task for <?php echo $project_name; ?></h1>
<table class="table table-hover table-bordered">
  <thead>
	  <tr>
			<th>Task Name</th>
			<th>Task Description</th>
			<th>Date</th>
			<th>Click</th>
	  </tr>
	</thead>
	<tbody>
		 
		   
		<tr>	
		    <td> 
			     <div class="task-name"><?php  echo  $task->task_name;   ?> </div>

				 <div class="task-action">
				 
				    <a href="<?php echo base_url('');?>tasks/edit/<?php echo $task->id; ?>">Edit </a>
					<a href="<?php echo base_url('');?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>" >Delete</a>
				 
				 
				 </div>
			
		    </td>
		    <td>    <?php  echo   $task->task_body;   ?> </td>
			<td>    <?php  echo   $task->date_create;?>  </td>
			<td> <a href="<?php echo base_url();?>tasks/mark_task_complete/<?php echo $task->id; ?>"> Mark Complete</a></td>
			<td> <a href="<?php echo base_url();?>tasks/mark_task_incomplete/<?php echo $task->id; ?>"> Mark incomplete </a>  </td>

	   
	    </tr>
          

	</tbody>

</table>
