<!-- resources/views/backend/sliders/edit.blade.php -->
@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Slider</h1>
    <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $slider->title }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $slider->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" style="max-width: 200px; margin-top: 10px;">
        </div>

        <button type="submit" class="btn btn-primary">Update Slider</button>
    </form>
</div>
@endsection
