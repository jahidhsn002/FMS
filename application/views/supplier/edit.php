<?php $this->load->view('theme/header'); ?>


<?php if($alert_eror != null): ?>
	<?php echo $alert_eror; ?>
<?php endif; 
if($alert_success != null): ?>
	<?php echo $alert_success; ?>
<?php endif; ?>

<?php echo form_open('Supplier/edit/' . $this->uri->segment(3) ); ?>

<h5>Invoice No</h5>
<input class="form-control" type="text" name="invoice" value="<?php echo $invoice; ?>" />

<h5>Name</h5>
<input class="form-control" type="text" name="name" value="<?php echo $name; ?>" />

<h5>Company</h5>
<input class="form-control" type="text" name="company" value="<?php echo $company; ?>" />

<h5>Phone</h5>
<input class="form-control" type="phone" name="phone" value="<?php echo $phone; ?>" />

<h5>Email</h5>
<input class="form-control" type="email" name="email" value="<?php echo $email; ?>" />

<h5>Address</h5>
<textarea class="form-control" name="address"><?php echo $address; ?></textarea>

<div><br/><input  class="btn btn-warning" type="reset" value="Reset" /> <input  class="btn btn-success" type="submit" value="Next" /></div>

</form>


<?php $this->load->view('theme/footer'); ?>

