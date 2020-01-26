<?php 
//echo "<pre>";
//print_r($result);
?>
<div class="container">
	<table class="table table-bordered" border="1">
        <tr>
        	<?php 
			foreach($result[0] as $key => $value)
			{
			?>
            	<th><?php echo $key; ?></th>
			<?php 	
			}
			?>
			<th colspan="2">Action</th>
        </tr>


		<?php 
		foreach ($result as $key => $value)
		{
			/*echo $value['user_id'];
			echo $value['fname'];*/
		?>
		<tr>
			<?php
			foreach($value as $key1 => $value1)
			{
			?>
            <td><?php echo $value1; ?></td>
            <?php 
			}
			?>

			<?php 
				/*echo*/$id = $value['user_id'];
			?>
			<td>
				<a class="btn btn-info" href="edituser?id=<?php echo $id; ?>">Edit</a>
			</td>
			<td>
				<a class="btn btn-danger" href="deleteuser?id=<?php echo $id ?>">Delete</a>
			</td>
        </tr>    
        <?php   
        }
		?>
	</table>
</div>