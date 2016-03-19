<html>
<head>
<title>My Form</title>
</head>
<body>
<?php if($alert_eror != null): ?>
	<?php echo $alert_eror; ?>
<?php endif; 
if($alert_success != null): ?>
	<?php echo $alert_success; ?>
<?php endif; ?>
<a href="<?php echo site_url('Supplier/edit/new'); ?>">Add New</a>
<table>
	<thead>
		<tr>
		<th>Invoice</th>
		<th>Name</th>
		<th>Company</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Address</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php 
	foreach($querys as $field){
		echo '<tr>';
		echo '<td>' . $field->invoice . '</td>';
		echo '<td>' . $field->name . '</td>';
		echo '<td>' . $field->company . '</td>';
		echo '<td>' . $field->phone . '</td>';
		echo '<td>' . $field->email . '</td>';
		echo '<td>' . $field->address . '</td>';
		echo '<td><a href="' . site_url('Supplier/edit/' . $field->id) . '">Edit</a><a href="' . site_url('Supplier/trash/' . $field->id) . '">Delete</a></td>';
		echo '</tr>';
	}
?>
	</tbody>
</table>
</body>
</html>

