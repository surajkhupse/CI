<h1>Display task view</h1>
<table class="table table-hover table-bordered">
  <thead>
	  <tr>
			<th>Task Name</th>
			<th>Task Description</th>
			<th>Date</th>
	  </tr>
	</thead>
	<tbody>
		 
		   
		<tr>	
		    <td><?php  echo  $task->task_name;   ?></td>
		<td>    <?php  echo   $task->task_body;   ?></td>
		<td>    <?php  echo   $task->date_create;?></td>
	   
	    </tr>
          

	</tbody>

</table>
