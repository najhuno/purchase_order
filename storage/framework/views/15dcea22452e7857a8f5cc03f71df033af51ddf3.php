<?php $__env->startSection('content'); ?>
<div class="x_panel">
					<h3>Aproval</h3>
					<div class="clearfix"></div>
					<div class="form-horizontal form-label-left">
						<div class="form-group">
							 <label class="col-lg-2 control-label">Nama mitra</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="nama-projek">
							</div>
						</div>

						<div class="form-group">
							 <label class="col-lg-2 control-label">Nama Product</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="nama-projek">
							</div>
						</div>

						<div class="form-group">
									 <label class="col-lg-2 control-label">Kategori</label>
									<div class="col-md-5">
							             <select id="rolename" class="form-control col-sm-4">
								             <option value="">combobox</option>
							            </select>
							         </div>
								</div>

						<div class="form-group">
							 <label class="col-lg-2 control-label">Tahun</label>
								<div class="col-md-3">
							             <select id="rolename" class="form-control col-sm-4">
									<option value="2018" selected="">Select Year</option>
																						<option value="2017">2017</option>
																						<option value="2018">2018</option>
																						<option value="2019">2019</option>
																						<option value="2020">2020</option>
																						<option value="2021">2021</option>
																				</select>
									</div>
								</div>
							
						<div class="form-group">
						 <label class="col-lg-2 control-label">Harga Barang</label>
							<div class="col-md-5">
								<input type="text" class="form-control hasDatepicker" id="finishdate">
							</div>
						</div>
						
						<div class="form-group">
					 		<label class="col-lg-2 control-label">Harga Product</label>
							<div class="col-md-5">
								<input type="text" class="form-control hasDatepicker" id="finishdate">
							</div>
						</div>


						<div class="form-group">
							 <label class="col-lg-2 control-label">Status aproval :</label>
							<div class="col-md-5">
  					     <input type="radio" id="contactChoice1"
								     name="contact" value="setuju">
								    <label for="contactChoice1">Setuju</label>
								    <input type="radio" id="contactChoice2"
								     name="contact" value="tidak setuju">
								    <label for="contactChoice2">Tidak Setuju</label>
						</div>
						</div>


						 
								

							 <div class="form-group">
								 <label class="col-lg-2 control-label">Komentar</label>         
										<div class="col-md-5">
											<textarea  class="form-control" id="jabatan-pegawai"></textarea>             
										</div>
							</div>

	                               <center>    <button type="button" data-index="1" class="btn btn-primary button_holiday_edit" data-toggle="modal" data-target="#modal_holiday_edit" value="4">Save Aproval</button>      <button type="button" class="btn btn-primary button_holiday_delete" data-toggle="modal" data-target="#modal_holiday_delete" value="4">Cancel</button></center>
					</div>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>