<?php $this->load->view('theme/header'); ?>

<?php if($alert_eror != null): ?>
	<?php echo $alert_eror; ?>
<?php elseif($alert_success != null): ?>
	<?php echo $alert_success; ?>
<?php else: ?>

<?php echo form_open('Stock/edit/' . $this->uri->segment(3) ); ?>

<h5>Drug ID</h5>
<input class="form-control" type="text" name="id" value="<?php echo $id; ?>" />

<h5>Drug Name</h5>
<input class="form-control" type="text" name="drug_name" value="<?php echo $drug_name; ?>" />

<h5>Quantity</h5>
<input class="form-control" type="number" name="quantity" value="0" />

<div><br/><input  class="btn btn-warning" type="reset" value="Reset" /> <input  class="btn btn-success" type="submit" value="Next" /></div>

</form>

<?php endif; ?>

<?php $this->load->view('theme/footer'); ?>

