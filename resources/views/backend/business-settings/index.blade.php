@extends('backend.layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Business Settings</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Business Name</th>
                    <th>Email</th>
                    <th>Contact Numbers</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($businessSettings as $setting)
                <tr>
                    <td>{{ $setting->id }}</td>
                    <td>{{ $setting->business_name }}</td>
                    <td>{{ $setting->email }}</td>
                    <td>{{ $setting->contact_numbers }}</td>
                    <td>{{ $setting->address }}</td>
                    <td>
                        <a href="{{ route('business-settings.edit', $setting->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
<style>
    .table-responsive {
        margin-left: 50px; /* Adjust margin as per your preference */
    }
</style>
