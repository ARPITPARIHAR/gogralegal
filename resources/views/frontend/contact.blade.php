@extends('frontend.layouts.app')
@section('meta_title','Contact To | '.env('APP_NAME'))
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

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="head text-center">
					<span>Contact</span>
					<h2>Contact Us</h2>
					<p>{{businessSetting(1)->brief_description}}</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="cntct_box">
					<div class="cntct_inr">
						<span><img src="{{asset('frontend/images/phone.png')}}" alt="phone"></span>
					</div>
					<div class="cntct_txt">
						<h4>Phone Number</h4>
						<p>{{businessSetting(1)->contact_numbers}}</p>
					</div>
				</div>
				<div class="cntct_box">
					<div class="cntct_inr">
						<span><img src="{{asset('frontend/images/mail.png')}}" alt="mail"></span>
					</div>
					<div class="cntct_txt">
						<h4>Email ID</h4>
						<p>{{businessSetting(1)->email}}</p>
					</div>
				</div>
				<div class="cntct_box">
					<div class="cntct_inr">
						<span><img src="{{asset('frontend/images/map.png')}}" alt="adrs"></span>
					</div>
					<div class="cntct_txt">
						<h4>Adress</h4>
						<p>{{businessSetting(1)->address}}</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
                <div class="cntct_frm">

                    @if(session()->has('success'))
                    <div class="flash-message alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      {{ session()->get('success') }}
                    </div>
                  @endif
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form_group">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="First Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form_group">
                            <input class="form-control" type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form_group">
                            <input class="form-control" type="email" name="mail" value="{{ old('mail') }}" placeholder="Email">
                            @error('mail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form_group">
                            <textarea class="form-control" name="message" placeholder="Message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form_group">
                            <button type="submit" class="btn btn-primary">Submitgfgfgfgfgfgf</button>
                        </div>
                    </form>


                </div>
            </div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14231.296771838235!2d75.7986365!3d26.9090741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa5cdd69189cc2407%3A0xb6e9f18bc9b042a2!2sGogra%20%26%20Company!5e0!3m2!1sen!2sin!4v1717572384379!5m2!1sen!2sin" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>

		</div>
	</div>
</section>

<style>
    .flash-message {

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  border-radius: 5px;
  background-color: #f0f9fa;
  background-image: linear-gradient(to bottom, #f0f9fa 0%, #e0ecf0 100%);
  z-index: 9999;
}

.flash-message.below-form {
  top: auto;
  bottom: 20px;
}


.form-container {
  position: relative;
}
</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@endsection
@section('modal')

@endsection
@section('scripts')

@endsection
@section('styles')

@endsection
