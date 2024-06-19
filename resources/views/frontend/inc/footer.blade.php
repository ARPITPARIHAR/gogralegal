<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<div class="ftr_box">
					<div class="ftr_logo">
						<a href="#"><img src="{{asset('frontend/images/ftr_logo.png')}}" alt="{{env('APP_NAME')}}"></a>
					</div>
					<p>{{businessSetting(1)->brief_description}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="ftr_box">
					<h4>Links</h4>
					<ul>
						<li><a href="{{route('home')}}">Home</a></li>
						<li><a href="#">Practice Areas</a></li>
						<li><a href="#">Lawyers</a></li>
						<li><a href="#">Publications</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="{{route('contact-us')}}">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="ftr_box">
					<h4>Practice Areas</h4>
					<ul>
						<li><a href="#">Family Law</a></li>
						<li><a href="#">Business Law</a></li>
						<li><a href="#">Insurance Law</a></li>
						<li><a href="#">Criminal Law</a></li>
						<li><a href="#">Drug Offenses</a></li>
						<li><a href="#">Property Law</a></li>
						<li><a href="#">Employment Law</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="ftr_box">
					<h4>Have a Questions?</h4>
					<ul class="adrs">
						<li>
							<span class="icon"><img src="{{asset('frontend/images/ftr_map.png')}}"></span>
							<span class=" text">{{businessSetting(1)->address}}</span>
						</li>
						<li>
							<span class="icon"><img src="{{asset('frontend/images/ftr_cll.png')}}"></span>
							<span class="text">{{businessSetting(1)->contact_numbers}}</span>
						</li>
						<li>
							<span class="icon"><img src="{{asset('frontend/images/ftr_mail.png')}}"></span>
							<span class="text">{{businessSetting(1)->email}}</span>
						</li>
					</ul>
					<ul class="social">
						<li>
							<a href="{{businessSetting(1)->instagram}}"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a>
						</li>
						<li>
							<a href="{{businessSetting(1)->linked_in}}"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-12">
				<div class="copyright">© 2024 - gogralegal.com | All Rights Reserved</div>
			</div>
		</div>
	</div>
</footer>
