<?php include "part/header.php";?>
<!-- awal header about us -->
<div class="header-contactus">
	<div class="col-md-4 col-edit-aboutus"></div>
	<div class="col-md-8 col-edit-aboutus">
		<div class="bg-title-about">
			<div class="title-about">
				About Us
			</div>
		</div>
	</div>
</div>
<!-- akhir header about us -->
<!-- awal wrapper alamat -->
<div class="wrapper-alamat">
	<div class="google-map">
		<div id="map_canvas"></div>
	</div>
</div>
<!-- akhir wrapper alamat -->
<!-- awal contact us -->
<div class="wrapper-contactus">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2><b>Contact Us</b></h2>
				<form>
					<div class="form-group">
				    	<label>Nama</label>
				    	<input type="text" class="form-control" placeholder="Masukkan nama" />
				  	</div>
				  	<div class="form-group">
				    	<label>Email</label>
				    	<input type="email" class="form-control" placeholder="Masukkan email" />
				  	</div>
				  	<div class="form-group">
				    	<label>Subject</label>
				    	<input type="text" class="form-control" placeholder="Masukkan subjek" />
				  	</div>
				  	<div class="form-group">
				    	<label>Komentar</label>
				    	<textarea placeholder="masukkan komentar anda" class="form-control" rows="10"></textarea>
				  	</div>
				  	<button type="submit" class="btn btn-primary btn-lg">Kirim komentar</button>
				</form>
			</div>
			<div class="col-md-6">
				<div class="service">
					<h3><b>Costumer Service</b></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<hr>
				<div class="address">
					<h3><b>Alamat Kantor</b></h3>
					<ul class="unlist-contact">
						<li><b style="color: #666;"><span class="glyphicon glyphicon-map-marker"></span>&nbsp&nbspAlamat: </b>JL. MH Thamrin No. 1 Central Jakarta, Menara BCA, Grand Indonesia Lt. 50</li>
						<li><b style="color: #666;"><span class="glyphicon glyphicon-envelope"></span>&nbsp&nbspEmail: </b>info@indobit.academy</li>
						<li><b style="color: #666;"><span class="glyphicon glyphicon-earphone"></span>&nbsp&nbspTelepon: </b>+62 (021) 123-4567</li>
					</ul>
				</div>
				<hr>
				<div class="bussiness-hour">
					<h3><b>Jam kerja</b></h3>
					<ul class="unlist-contact">
						<li><b style="color: #666;">Senin - Jumat</b> 09:00 - 16:00</li>
						<li><b style="color: #666;">Sabtu - Minggu</b> Libur</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- akhir contact us -->
<?php include "part/footer.php";?>