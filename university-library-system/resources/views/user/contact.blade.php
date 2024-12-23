@extends('layouts.user_master')

@section('title', 'Contact - University Library System')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
<section class="heading-page header-text">
    <section class="contact-us" id="contact" <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Let's get in touch</h2>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="YOUR NAME...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="YOUR EMAIL..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..."
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <h6>Phone Number</h6>
                            <span>+962-700-500-30</span>
                        </li>
                        <li>
                            <h6>Email Address</h6>
                            <span>info@university.edu</span>
                        </li>
                        <li>
                            <h6>Street Address</h6>
                            <span>Aqaba - Aq, 5620-124, Jordan</span>
                        </li>
                        <li>
                            <h6>Website URL</h6>
                            <span>www.university.edu</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
</section>

@endsection
