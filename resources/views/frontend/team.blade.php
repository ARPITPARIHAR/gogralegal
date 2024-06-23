@extends('frontend.layouts.app')
@section('meta_title','Team | '.env('APP_NAME'))
@section('meta_description','Gogra Legal')
@section('content')
<section class="inner_banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 no_padding">
				<div class="inr_bnr">
					<img src="{{asset('frontend/images/banner_inner.jpg')}}" alt="bnr">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="head text-center">
					<span>Team</span>
					<h2>Our Team</h2>
				</div>
			</div>
<<<<<<< HEAD
            @foreach (App\Models\Team::get() as $member)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-box">
                        <div class="team-imag"><img src="{{asset($member->thumbnail_img)}}" alt="team"></div>
                        <h4>{{ $member->name }}</h4>
                        <span>{{ $member->designation }}</span>
                        <p>{{ $member->brief_description }}</p>
                        {{-- <ul>
                            <li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
                        </ul> --}}
                    </div>
                </div>
            @endforeach
=======
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt001.png')}}" alt="team"></div>
					<h4>Nishant Parikh</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt002.png')}}" alt="team"></div>
					<h4>Sridhar Gorthi</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt003.png')}}" alt="team"></div>
					<h4>Nisha Kaur Uberoi</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt001.png')}}" alt="team"></div>
					<h4>Nishant Parikh</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt002.png')}}" alt="team"></div>
					<h4>Sridhar Gorthi</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt003.png')}}" alt="team"></div>
					<h4>Nisha Kaur Uberoi</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt001.png')}}" alt="team"></div>
					<h4>Nishant Parikh</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt002.png')}}" alt="team"></div>
					<h4>Sridhar Gorthi</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt003.png')}}" alt="team"></div>
					<h4>Nisha Kaur Uberoi</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt001.png')}}" alt="team"></div>
					<h4>Nishant Parikh</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt002.png')}}" alt="team"></div>
					<h4>Sridhar Gorthi</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="team-box">
					<div class="team-imag"><img src="{{asset('frontend/images/mngmnt003.png')}}" alt="team"></div>
					<h4>Nisha Kaur Uberoi</h4>
					<span>Partner - Corporate</span>
					<p>M&A | Joint Ventures | PE-VC Investments | General Corporate </p>
					<ul>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl001.png')}}"></a></li>
						<li><a href="#"><img src="{{asset('frontend/images/hdr_scl002.png')}}"></a></li>
					</ul>
				</div>
			</div>


>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
		</div>
	</div>
</section>
@endsection
@section('modal')

@endsection
@section('scripts')

@endsection
@section('styles')

@endsection
