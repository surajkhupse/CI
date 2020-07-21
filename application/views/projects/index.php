

		



<p class="bg-success">

<?php if($this->session->flashdata('project_created')):?>

<?php echo $this->session->flashdata('project_created'); ?>

<?php endif;  ?>

<?php if($this->session->flashdata('project_update')):?>

<?php echo $this->session->flashdata('project_update'); ?>

<?php endif;  ?>

</p>

<p class="bg-danger">

<?php if($this->session->flashdata('project_deleted')):?> 

<?php echo $this->session->flashdata('project_deleted'); ?>

<?php endif;  ?>

</p>

<p class="bg-success">

<?php if($this->session->flashdata('task_update')):?> 

<?php echo $this->session->flashdata('task_update'); ?>

<?php endif;  ?>

</p>

<div class="panel panel-primary">

<div class="panel-heading"><H1>Projects</H1></div>

<ul class="list-group">
 
<li class="list-group-item"> <a class="btn btn-primary pull-right" href="<?php echo base_url();?>projects/create">Create Project</a> 
</li>

</ul>


<table class="table table-hover table-bordered">
  <thead>
	  <tr>
			<th>Project Name</th>
			<th>Project Description</th>
	  </tr>
	</thead>
	<tbody>
		  <?php foreach($projects as $project): ?>

			
                  
			
   
		<tr>
		   <?php  echo "<td><a href='". base_url() ."projects/display/". $project->id ."'>" . $project->project_name . "</a></td>" ;   ?>
		   <?php  echo "<td>" . $project->project_body . "</td>" ;   ?>
 
             <td><a id="delete"  class="btn btn-danger" href="<?php echo base_url();?>projects/delete/<?php echo $project->id?>"><span class="glyphicon glyphicon-remove"></span></a></td>

		  </tr>
            <?php endforeach; ?>

	</tbody>

</table>

</div>
</div>

