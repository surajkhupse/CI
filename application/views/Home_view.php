
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

<H2>Projects</H2>

<table class="table table-hover table-bordered">
  <thead >
	  <tr>
			<th>Project Name</th>
			<th>Project Description</th>
	  </tr>
	</thead>
	<tbody>
		  <?php foreach($projects as $project): ?>
		   
		<tr>	
		   <td><?php  echo  $project->project_name  ;   ?></td>
		   <td><?php  echo  $project->project_body  ;   ?></td>
		   <td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>">View</a></td>
 
        </tr>
            <?php endforeach; ?>

	</tbody>

</table>
		  <?php endif; ?>
