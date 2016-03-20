<?php $this->load->view('theme/header'); ?>

<?php if($alert_eror != null): ?>
	<?php echo $alert_eror; ?>
<?php endif; 
if($alert_success != null): ?>
	<?php echo $alert_success; ?>
<?php endif; ?>
<table class="table table-bordered" id="Stock">
	<thead>
		<tr>
		<th><a class="btn btn-sm btn-success" href="<?php echo site_url('Stock/find'); ?>">Add New</a></th>
		<th colspan="20">Stock</th>
		</tr>
		<tr>
		<th>Drug ID</th>
		<th>Drug Name</th>
		<th>Quantity</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php 
	foreach($querys as $field){
		if( $field->quantity < 10 ){
			echo '<tr>';
			echo '<td>' . $field->id . '</td>';
			echo '<td>' . $field->drug_name . '</td>';
			echo '<td>' . $field->quantity . '</td>';
			echo '<td><a class="btn btn-xs btn-danger" href="' . site_url('Stock/trash/' . $field->id) . '">Delete</a></td>';
			echo '</tr>';
		}
	}
?>
	</tbody>
</table>


<?php $this->load->view('theme/footer'); ?>

<script>
	$(document).ready(function(){
		$('#Stock').DataTable();
	});
</script>