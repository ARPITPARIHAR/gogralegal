<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/responsive.css')}}">

<title>Gogra Legal</title>

</head>
<body>

@include('frontend.inc.header')

<section class="dashboard">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="d-flex align-items-start">
					<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first" type="button" role="tab" aria-controls="v-pills-first" aria-selected="true"><img src="{{asset('frontend/images/nav001.png')}}" alt="nav_icn">
                            Dashboard
                        </a>
						<a class="nav-link" id="v-pills-second-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second" type="button" role="tab" aria-controls="v-pills-second" aria-selected="false"><img src="{{asset('frontend/images/nav002.png')}}" alt="nav_icn">
                            Profile
                        </a>
						<a class="nav-link" id="v-pills-third-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third" type="button" role="tab" aria-controls="v-pills-third" aria-selected="false"><img src="{{asset('frontend/images/nav003.png')}}" alt="nav_icn">
                            Case Status
                        </a>
						<a class="nav-link" id="v-pills-four-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourth" type="button" role="tab" aria-controls="v-pills-fourth" aria-selected="false"><img src="{{asset('frontend/images/nav004.png')}}" alt="nav_icn">
                            Billing
                        </a>
						<a class="nav-link" href="{{ route('logout') }}"><img src="{{asset('frontend/images/nav005.png')}}" alt="nav_icn">
                            Logout
                        </a>
					</div>
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-first" role="tabpanel" aria-labelledby="v-pills-first-tab">
							<div class="dshbrd_dtls">
								<h2>Welcome to Dashboard</h2>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab">
							<div class="dshbrd_dtls">
								<h2>Profile</h2>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab">
							<div class="dshbrd_dtls">
								<h2>Case Status </h2>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-fourth" role="tabpanel" aria-labelledby="v-pills-fourth-tab">
							<div class="dshbrd_dtls">
								<h2>Billing</h2>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>

<script>

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function sdbr_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function sdbr_close() {
  document.getElementById("mySidebar").style.display = "none";
}


$('.bnr_slide').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: true,
	autoplay: true,
	autoplayTimeout: 5000,
	navText : ['<img src="images/prev.png">','<img src="images/next.png">'],
	responsive: {
	  0: {
		items: 1
	  },
	  768: {
		items: 1
	  },
	  1200: {
		items: 1
	  }
	}
});

$('.hm_clnt').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: false,
	autoplay: true,
	autoplayTimeout: 3000,
	navText : ['<img src="images/prev.png">','<img src="images/next.png">'],
	responsive: {
	  0: {
		items: 2
	  },
	  768: {
		items: 3
	  },
	  1200: {
		items: 4
	  }
	}
});

</script>


</body>
</html>
