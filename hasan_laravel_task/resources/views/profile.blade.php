@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Profile Page</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle" alt="Profile Picture">
            </div>
            <div class="col-md-8">
                <h3>User Information</h3>
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Email:</strong> johndoe@example.com</p>
                <p><strong>Bio:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nisi vel consectetur interdum.</p>
            </div>
        </div>
    </div>
</div>
@endsection