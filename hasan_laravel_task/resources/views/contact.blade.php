@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Contact Us</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h3>Send us a message</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="your@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Your message here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> 123 Laravel Street, Web City</p>
                <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                <p><strong>Email:</strong> contact@example.com</p>
                <p><strong>Hours:</strong> Monday - Friday, 9:00 AM - 5:00 PM</p>
            </div>
        </div>
    </div>
</div>
@endsection