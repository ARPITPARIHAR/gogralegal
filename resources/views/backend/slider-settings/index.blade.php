<!-- resources/views/backend/sliders/index.blade.php -->
@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h1>Manage Sliders</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sliders as $slider)
            <tr>
                <td>{{ $slider->id }}</td>
                <td>{{ $slider->title }}</td>
                <td>{{ $slider->description }}</td>
                <td><img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" style="max-width: 100px;"></td>
                <td>
                    <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-primary">Edit</a>
                    <!-- Add delete button if needed -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
