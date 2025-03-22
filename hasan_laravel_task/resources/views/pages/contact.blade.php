@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Contact Us</h1>
        </div>
        <div class="card-body">
            <p>You can reach us at: contact@example.com</p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection