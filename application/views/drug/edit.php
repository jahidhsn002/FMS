<?php $this->load->view('theme/header'); ?>

<?php if($alert_eror != null): ?>
	<?php echo $alert_eror; ?>
<?php endif; 
if($alert_success != null): ?>
	<?php echo $alert_success; ?>
<?php endif; ?>

<?php echo form_open('Drug/edit/' . $this->uri->segment(3) ); ?>

<h5>Invoice No</h5>
<input class="form-control" type="text" name="invoice" value="<?php echo $invoice; ?>" />

<h5>Name</h5>
<input class="form-control" type="text" name="name" value="<?php echo $name; ?>" />

<h5>Group</h5>
<input class="form-control" type="text" name="group" value="<?php echo $group; ?>" />

<h5>Power</h5>
<input class="form-control" type="text" name="power" value="<?php echo $power; ?>" />

<h5>Retail Price</h5>
<input class="form-control" type="number" name="retail_price" value="<?php echo $retail_price; ?>" />

<h5>Sale Price</h5>
<input class="form-control" type="number" name="sale_price" value="<?php echo $sale_price; ?>" />

<div><br/><input  class="btn btn-warning" type="reset" value="Reset" /> <input  class="btn btn-success" type="submit" value="Next" /></div>

</form>

<?php $this->load->view('theme/footer'); ?>

