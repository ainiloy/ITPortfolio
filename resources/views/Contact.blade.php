@extends('Layout.app')
@section('title','Contact')
@section('content')

    <div class="container-fluid jumbotron mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <h1 class="page-top-title mt-3">Contact With Us</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29245.285523717197!2d90.5047864!3d23.6164989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b10812a520a3%3A0x6d3af4457bec4c90!2sNarayanganj!5e0!3m2!1sen!2sbd!4v1665815158408!5m2!1sen!2sbd" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            <div class="col-md-6">
                <h3 class="service-card-title">Address</h3>
                <hr>
                <p class="footer-text"><i class="fas fa-map-marker-alt"></i>Narayanganj</p>
                <h3 class="service-card-title">Send Message</h3>
                <div class="form-group ">
                    <input id="contactNameId" type="text" class="form-control w-100" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input id="contactMobileId" type="text" class="form-control  w-100" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    <input id="contactEmailId" type="text" class="form-control  w-100" placeholder="Email">
                </div>
                <div class="form-group">
                    <input id="contactMsgId" type="text" class="form-control  w-100" placeholder="Your Message">
                </div>
                <button id="contactSendBtnId"  class="btn btn-block normal-btn w-100">Send</button>
            </div>
        </div>
    </div>
@endsection
