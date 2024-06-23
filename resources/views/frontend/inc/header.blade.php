<header class="header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 no_padding">
				<div class="topbar">
					<div class="mail">
<<<<<<< HEAD
						<a href="mailto:{{businessSetting(1)->email}}">Mail Us:{{businessSetting(1)->email}}</a>
=======
						<a href="mailto:gogralegal@gmail.com">Mail Us: gogralegal@gmail.com</a>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
					</div>
					<div class="tp_rght">
						<div class="srch">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username">
								<div class="input-group-append">
									<span class="input-group-text">Go</span>
								</div>
							</div>
						</div>
						<div class="cnslt">
							<a href="#">Online Consultation</a>
						</div>
						<div class="social">
							<ul>
<<<<<<< HEAD
								<li><a href="{{businessSetting(1)->instagram ?? '#'}}"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
								<li><a href="{{businessSetting(1)->linked_in ?? '#'}}"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
=======
								<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
								<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
							</ul>
						</div>
					</div>
				</div>
				<div class="main_head" id="myHeader">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<div class="logo">
<<<<<<< HEAD
								<a href="{{ route('home') }}"><img src="{{businessSetting(1)->header_logo}}" alt="logo"></a>
=======
								<a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="menus">
								<nav class="navbar navbar-expand-lg navbar-light">
									<button class="navbar-toggler" type="button" onclick="sdbr_open()">
									  <span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse" id="mySidebar">
										<ul class="navbar-nav me-auto mb-2 mb-lg-0">
											<button onclick="sdbr_close()" class="close">&times;</button>
<<<<<<< HEAD
											<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
=======
											<li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Home</a></li>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
												<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
													@foreach (App\Models\Page::where('parent_id',2)->orderBy('position')->get() as $page)
                                                        <li><a class="dropdown-item" href="{{route('about-us',$page->slug)}}">{{Str::headline($page->name)}}</a></li>
                                                    @endforeach
												</ul>
											</li>
                                            <li class="nav-item dropdown">
<<<<<<< HEAD
												<a class="nav-link dropdown-toggle" href="{{route('practice-areas.index')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Practice Areas</a>
												<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
													@foreach (App\Models\PracticeArea::orderBy('title')->get() as $practice_areas)
                                                        <li><a class="dropdown-item" href="{{route('practice-area.show',$practice_areas->slug)}}">{{Str::headline($practice_areas->title)}}</a></li>
=======
												<a class="nav-link dropdown-toggle" href="{{route('practice-areas')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Practicefff Areas</a>
												<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
													@foreach (App\Models\Page::where('parent_id',10)->orderBy('position')->get() as $page)
                                                        <li><a class="dropdown-item" href="{{route('about-us',$page->slug)}}">{{Str::headline($page->name)}}</a></li>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
                                                    @endforeach
												</ul>
											</li>
											<li class="nav-item"><a class="nav-link" href="{{route('team')}}">Team</a></li>
<<<<<<< HEAD
											@if (auth()->user())
                                                <li class="nav-item"><a class="nav-link" href="@if(auth()->user()->user_type=='admin'){{ route('admin.dashboard')}}@else {{ route('customer.dashboard') }}@endif">Dashboard</a></li>
                                            @else
                                                <li class="nav-item"><a class="nav-link" href="{{route('login-register')}}">Client Sign Area</a></li>
                                            @endif
=======
											<li class="nav-item"><a class="nav-link" href="{{route('login-register')}}">Client Sign Area</a></li>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
