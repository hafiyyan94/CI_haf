	<div class="container">
    	<div class="row">
    		<div class="col-lg-4 col-sm-4 ">
    		</div>
         	<div class="col-lg-4 col-sm-4 well">
	         	<?php 
	         	$attributes = array("class" => "form-horizontal", "id" => "absenform", "name" => "absenform");
	         	echo form_open("absen/index", $attributes);?>
	         	<fieldset>
	               <legend>ISI ABSENSI</legend>
	               <div class="form-group">
	               <div class="row colbox">
	               <div class="col-lg-4 col-sm-4">
	                    <label for="txt_username" class="control-label">Username</label>
	               </div>
	               <div class="col-lg-8 col-sm-8">
	                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
	                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
	               </div>
	               </div>
	               </div>	                              
	               <div class="form-group">
	               <div class="col-lg-12 col-sm-12 text-center">
	                    <input id="btn_login" name="btn_absen" type="submit" class="btn btn-default" value="Absen" />
	               </div>
	               </div>
	         	</fieldset>
	         	<?php echo form_close(); ?>
	         	<?php echo $this->session->flashdata('msg'); ?>
         	</div>
    	</div>
	</div>
