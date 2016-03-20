<?php $this->load->view('theme/header'); ?>

<?php if($alert_eror != null): ?>
	<?php echo $alert_eror; ?>
<?php endif; 
if($alert_success != null): ?>
	<?php echo $alert_success; ?>
<?php endif; ?>

<table class="table table-bordered" id="Drug">
	<thead>
		<tr>
		<th colspan="20">Drug List</th>
		</tr>
		<tr>
		<th>Id</th>
		<th>Invoice</th>
		<th>Name</th>
		<th>Group</th>
		<th>Power</th>
		<th>Retail Price</th>
		<th>Sale Price</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php 
	foreach($querys as $field){
		echo '<tr>';
		echo '<td>' . $field->id . '</td>';
		echo '<td>' . $field->invoice . '</td>';
		echo '<td>' . $field->name . '</td>';
		echo '<td>' . $field->group . '</td>';
		echo '<td>' . $field->power . '</td>';
		echo '<td>' . $field->retail_price . '</td>';
		echo '<td>' . $field->sale_price . '</td>';
		echo '<td><a class="btn btn-xs btn-info" href="' . site_url('Stock/edit/' . $field->id) . '">Select</a></td>';
		echo '</tr>';
	}
?>
	</tbody>
</table>

<?php $this->load->view('theme/footer'); ?>

<script>
	$(document).ready(function(){
		$('#Drug').DataTable();
	});
</script>