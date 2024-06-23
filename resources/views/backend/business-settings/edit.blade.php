@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Edit Business Setting</h1>
        <div class="row justify-content-center"> <!-- Center align row -->
            <div class="col-md-8"> <!-- Adjust column width as needed -->
                <form method="POST" action="{{ route('business-settings.update', $businessSetting->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="business_name">Business Name</label>
                        <input type="text" name="business_name" id="business_name" class="form-control" value="{{ $businessSetting->business_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $businessSetting->email }}" required>
                    </div>

                    <div class="form-group">
                        <label for="contact_numbers">Contact Numbers</label>
                        <input type="text" name="contact_numbers" id="contact_numbers" class="form-control" value="{{ $businessSetting->contact_numbers }}" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" rows="3" required>{{ $businessSetting->address }}</textarea>
                    </div>

                    <div class="text-center"> <!-- Center align buttons -->
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('business-settings.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
