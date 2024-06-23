<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<div class="ftr_box">
					<div class="ftr_logo">
<<<<<<< HEAD
						<a href="#"><img src="{{businessSetting(1)->footer_logo}}" alt="{{env('APP_NAME')}}"></a>
=======
						<a href="#"><img src="{{asset('frontend/images/ftr_logo.png')}}" alt="{{env('APP_NAME')}}"></a>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
					</div>
					<p>{{businessSetting(1)->brief_description}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="ftr_box">
					<h4>Links</h4>
					<ul>
						<li><a href="{{route('home')}}">Home</a></li>
<<<<<<< HEAD
						<li><a href="{{ route('practice-areas.index') }}">Practice Areas</a></li>
						<li><a href="{{ route('lawyers') }}">Lawyers</a></li>
						<li><a href="{{ route('publications') }}">Publications</a></li>
						<li><a href="{{ route('careers') }}">Careers</a></li>
=======
						<li><a href="#">Practice Areas</a></li>
						<li><a href="#">Lawyers</a></li>
						<li><a href="#">Publications</a></li>
						<li><a href="#">Careers</a></li>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
						<li><a href="{{route('contact-us')}}">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="ftr_box">
					<h4>Practice Areas</h4>
					<ul>
<<<<<<< HEAD
                        @foreach (App\Models\PracticeArea::select('title','slug')->orderBy('title')->take(6)->get() as $practice_area)
						    <li><a href="{{ route('practice-area.show',$practice_area->slug) }}">{{ $practice_area->title }}</a></li>
                        @endforeach
=======
						<li><a href="#">Family Law</a></li>
						<li><a href="#">Business Law</a></li>
						<li><a href="#">Insurance Law</a></li>
						<li><a href="#">Criminal Law</a></li>
						<li><a href="#">Drug Offenses</a></li>
						<li><a href="#">Property Law</a></li>
						<li><a href="#">Employment Law</a></li>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
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
<<<<<<< HEAD
							<a href="{{businessSetting(1)->instagram ?? '#'}}"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a>
						</li>
						<li>
							<a href="{{businessSetting(1)->linked_in ?? '#'}}"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a>
=======
							<a href="{{businessSetting(1)->instagram}}"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a>
						</li>
						<li>
							<a href="{{businessSetting(1)->linked_in}}"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-12">
<<<<<<< HEAD
				<div class="copyright">© 2019-{{ date('Y') }} - {{ businessSetting(1)->business_name }} | All Rights Reserved</div>
=======
				<div class="copyright">© 2024 - gogralegal.com | All Rights Reserved</div>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
			</div>
		</div>
	</div>
</footer>
