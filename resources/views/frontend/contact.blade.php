@extends('layouts.frontend')
@section('title', 'Contact')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Contact</h1>
        
    </div>
@endsection
@section('content')
<div class="bg_gray">
    <div class="container margin_60_40">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="icon_tag_alt"></i>
                    <h2>Reservations</h2>
                    <a href="#">{{ $general ? $general->primary_phone:'' }}</a>
                    <a href="#">{{ $general ? $general->email:'' }}</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="icon_pin_alt"></i>
                    <h2>Address</h2>
                    <div>{!! $general ? $general->address:'' !!}</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="icon_clock_alt"></i>
                    <h2>Opening Hours</h2>
                    <div>MON to FRI 9am-6pm</div>
                    <div>SAT 9am-2pm</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container margin_60_40">
    <h5 class="mb_5"> Use Contact form below</h5>
    <div class="row">
        <div class="col-lg-4 col-md-6 add_bottom_25">
            <div id="message-contact"></div>
            <form action="{{ route('mail') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input class="form-control" type="text" placeholder="Name" id="name_contact"
                        name="name">
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" type="email" placeholder="Email" id="email_contact"
                        name="email">
                </div>
                <div class="form-group mb-3">
                    <textarea class="form-control" style="height: 150px;" placeholder="Message"
                        id="message_contact" name="message"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn_1 full-width" type="submit" value="Submit" id="submit-contact">
                </div>
            </form>
        </div>
        <div class="col-lg-8 col-md-6 add_bottom_25">
            <iframe class="map_contact"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4926.17317221555!2d-0.410394!3d51.877632!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487648438f64530b%3A0x538dc6dc4f5daf00!2sThe%20Metro!5e0!3m2!1sen!2suk!4v1718755623821!5m2!1sen!2suk%22%20width=%22600%22%20height=%22450%22%20style=%22border:0;%22%20allowfullscreen=%22%22%20loading=%22lazy%22%20referrerpolicy=%22no-referrer-when-downgrade"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection
