@extends('main.layout.app')

@section('content')
<div class="container py-5 navbar-compen">
    @if(session("status"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h1 class="blue-700 text-center">We'd love to hear from you</h1>
    <div class="row py-5 mx-3">
        <div class="col-md-6 col mb-md-0 mb-3">
            <h4 class="blue-700 mt-3">Contact Information</h4>
            <h5 class="blue-600 mb-3">BAWERA ARTHA MAKMUR</h5>
            <p class="">Office&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Villa Bukit Tidar C1-501 Malang, Jawa Timur, Indonesia</p>
            <p>Phone/Whatsapp&nbsp;&nbsp;: +62 81246244965</p>
            <p class="">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: info@baweraarthamakmur.com</p>
        </div>
        <div class="col-md-6 col">
            <h4 class="blue-700 mt-3">Send Us Massage</h4>
            <form action="{{route("send-message")}}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="body" rows="3"></textarea>
                </div>
                <div class="col-12 d-grid">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
