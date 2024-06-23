@extends('frontend.layouts.app')
@section('meta_title',$page->name.' | '.env('APP_NAME'))
<<<<<<< HEAD
@section('meta_description',$page->meta_description)
=======
@section('meta_description','Gogra Legal')
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
@section('content')
<section class="inner_banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 no_padding">
				<div class="inr_bnr">
<<<<<<< HEAD
					<img src="{{asset($page->header_img)}}" alt="{{ $page->title }}">
=======
					<img src="{{asset('frontend/images/banner_inner.jpg')}}" alt="bnr">
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cmpny_ovrvw about">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<div class="cmpny_imag">
<<<<<<< HEAD
					<img src="{{asset($page->thumbnail_img)}}" alt="{{ $page->title }}">
=======
					<img src="{{asset('frontend/images/cmpny_imag.jpg')}}" alt="cmpny_imag">
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
				</div>
			</div>
			<div class="col-lg-7 col-md-12">
				<div class="cmpny_text">
					<span>{{$page->name}}</span>
					{!!$page->description!!}
				</div>
			</div>
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
