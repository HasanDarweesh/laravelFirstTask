@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>User Profile</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle mb-3" alt="Profile Picture">
                    <h3>User Name</h3>
                    <p>user@example.com</p>
                </div>
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="User Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="user@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" value="123 Main St">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" value="123-456-7890">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Update Photo</label>
                            <input type="file" class="form-control" id="photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection