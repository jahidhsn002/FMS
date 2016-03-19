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

<?php echo form_open('Supplier/edit/' . $this->uri->segment(3) ); ?>

<h5>Invoice No</h5>
<input type="text" name="invoice" value="<?php echo $invoice; ?>" />

<h5>Name</h5>
<input type="text" name="name" value="<?php echo $name; ?>" />

<h5>Company</h5>
<input type="text" name="company" value="<?php echo $company; ?>" />

<h5>Phone</h5>
<input type="phone" name="phone" value="<?php echo $phone; ?>" />

<h5>Email</h5>
<input type="email" name="email" value="<?php echo $email; ?>" />

<h5>Address</h5>
<textarea name="address"><?php echo $address; ?></textarea>

<div><input type="reset" value="Reset" /><input type="submit" value="Next" /></div>

</form>

</body>
</html>

