<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>
<div class="container-contact100">
	<?php
	if(isset($_SESSION['input_sukses']))
	{
		?>
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Sukses!</strong> <?php echo $_SESSION['input_sukses']; ?>
		</div>
		<?php
	}
	?>

	<div class="wrap-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(<?php echo base_url('assets/form/images/bg-01.jpg') ?>);">
				<span class="contact100-form-title-1">
					Hottel
				</span>

				<span class="contact100-form-title-2">
					ADD DATA HOTTEL!
				</span>
			</div>
		<?php echo form_open('Admin_hotel/insertdata', ['class' => 'contact100-form validate-form', 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>
			<div class="wrap-input100 validate-input" data-validate="Title is required">
				<span class="label-input100"> Title:</span>
				<input class="input100" type="text" name="title" placeholder="Enter full Title">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate="Title-2 is required">
				<span class="label-input100">Title-2:</span>
				<input class="input100" type="text" name="title2" placeholder="Enter full Title-2">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate = "Description is required">
				<span class="label-input100">Description:</span>
				<textarea class="input100" name="description" placeholder="Enter full Description"></textarea>
				<span class="focus-input100"></span>
			</div>	
			<div class="wrap-input100 validate-input" data-validate = "Address is required">
				<span class="label-input100">Address:</span>
				<textarea class="input100" name="alamat" placeholder="Enter full Address"></textarea>
				<span class="focus-input100"></span>
			</div>			
			<div class="wrap-input100 validate-input" data-validate="Equipment is required">
				<span class="label-input100">Equipment:</span>
				<label class="checkbox-inline">
					<input type="checkbox" name="rincian1" value="1 Kasur Queen"> 1 Kasur Queen
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="rincian2" value="WIFI"> WIFI
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="rincian3" value="AC"> AC
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="rincian4" value="Film Sesuai Permintaan"> Film Sesuai Permintaan
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="rincian5" value="Tv satelit/kabel"> Tv satelit/kabel
				</label>	
				<label class="checkbox-inline">
					<input type="checkbox" name="rincian6" value="Shower and Bathtub"> Shower and Bathtub
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="rincian7" value="Jubah Mandi"> Jubah Mandi
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="rincian8" value="Perlengkapan Mandi"> Perlengkapan Mandi	
				</label>
				<span class="focus-input100"></span>
			</div>				
			<div class="wrap-input100 validate-input" data-validate="Price is required">
				<span class="label-input100">Price:</span>
				<input class="input100" type="number" name="harga" placeholder="Enter full Price">
				<span class="focus-input100"></span>
			</div>				
			<div class="wrap-input100 validate-input" data-validate="Number is required">
				<span class="label-input100">Number:</span>
				<input class="input100" type="number" name="nomor" placeholder="Enter full Number">
				<span class="focus-input100"></span>
			</div>				
			<div class="wrap-input100 validate-input" data-validate="Email is required">
				<span class="label-input100">Email:</span>
				<input class="input100" type="text" name="email" placeholder="Enter full Email">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate="Foto is required">
				<span class="label-input100">Foto:</span>
				<input class="input100" type="file" name="fotopost" placeholder="Enter Fotopost">
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn">
					<span>
						Submit
						<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
					</span>
				</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>



<div id="dropDownSelect1"></div>