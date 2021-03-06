   <!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"/>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>
							<strong>Tambah Menu</strong>
						</h2>
						<div class="clearfix"/>
					</div>
					<div class="x_content">
						<br />
						<form id="demo-form2" data-parsley-validate method="post" action="<?php echo base_url('admin/tambah_menu_proses');?>" enctype="multipart/form-data" class="form-horizontal form-label-left">
								<?php validation_errors();?>                   
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Menu<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<?php echo form_input(array('name'=>'nama_menu','placeholder'=>'Nama Menu','class'=>'form-control col-md-7 col-xs-12','required' => 'required')); ?>
									</div>
								</div>	
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Menu<span class="required">*</span>
									</label>
									<div class="col-md-5 col-sm-9 col-xs-12">
										<?php echo cmb_dinamis('id_category', 'tbl_category_menu', 'category_menu', 'id_category', $id_category) ?>
									</div>
								</div>	
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga<span class="required">*</span>
									</label>
									<div class="col-md-2 col-sm-6 col-xs-12">
										<?php echo form_input(array('name'=>'harga','type'=>'number','placeholder'=>'17000','class'=>'form-control col-md-7 col-xs-12','required' => 'required')); ?>
									</div>
								</div>						
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input  id="fileInput" type="file" name="filefoto" required > Maximal Tinggi 1080, Lebar 1920, Size 2MB 
										</div>

									</div>
									<div class="ln_solid"/>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<?php echo form_submit(array('value'=>'Simpan','name'=>'Simpan','class'=>'btn btn-primary'));?>
											<a href="<?php echo base_url('admin/lihat_menu');?>" class="btn btn-danger batal" role="button">Cancel</a>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>




				