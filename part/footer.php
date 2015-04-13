		<footer class="footer">
			<div class="container">
				<div classs="row">
					<div class="col-md-4">
						<div class="logo-footer">
							<img src="asset/img/indobit-logo.png" class="img-responsive img-logo" width="80px" /><span>Indobit.com</span>
							<div class="sosmed-boticon">
								<img src="asset/icon/1428483069_Facebook-128.png" width="30px" />
								<img src="asset/icon/1428483081_Twitter-128.png" width="30px" />
								<img src="asset/icon/1428483102_Intsagram-128.png" width="30px" />
								<img src="asset/icon/1428483088_Google_-128.png" width="30px" />
								<img src="asset/icon/1428483095_YouTube-128.png" width="30px" />
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="title-footer">Contact Us</div>
						<p class="alamat-footer">
							Indobit Academy<br>
							Menara BCA, Grand Indonesia Lt. 50<br>
							JL. MH Thamrin No. 1 Central Jakarta,<br>
							10230<br>
							Telephone: +62 (021) 123-4567<br>
							Email: info@indobit.academy
						</p>
					</div>
					<div class="col-md-4">
						<div class="menu-footer">
							<ul>
								<li><a href="#">Media Review</a></li>
								<li><a href="#">Achievment</a></li>
								<li><a href="#">Indobit Network</a></li>
								<li><a href="#">Meet Our Team</a></li>
								<li><a href="#">Job & Career</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Service Level Agreement (SLA)</a></li>
								<li><a href="#">Terms of Service (TOS)</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<span>&copy 2015 Indobit, Group member of Indobit Technologies</span>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="asset/js/jquery-2.1.3.min.js"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
		function initialize() {
			var myLatlng = new google.maps.LatLng(-6.200953, 106.833886);
			var mapOptions = {
				zoom: 15,
			 	center: myLatlng
			}
			var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

			var marker = new google.maps.Marker({
			    position: myLatlng,
			    map: map,
			    title: 'Indobit'
			});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</html>