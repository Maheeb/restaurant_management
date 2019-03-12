@extends('layouts.fmain')

@section('content')
    <!--content-->
    <div class="contact">
        <div class="container">
            <div class="menu-top">
                <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>Contact</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <span>There are many variations</span>
                </div>
                <div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="contact-top">
                <div class="col-md-5 contact-map">
                    <h5>Google Map</h5>
                    <div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>

                    </div>
                    <div class="address">
                        <h4>Address</h4>
                        <p> Richard McClintock</p>
                        <p>Letraset sheets </p>
                        <p>ph : +123 859 6050</p>
                        <p>Email : <a href="mailto:example@gmail.com">example@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h5>Contact Form</h5>

                    @if(session('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif
                    {!! Form::open(['route'=>'join.sucs']) !!}
                    {{csrf_field()}}
                        <div class="grid-contact">
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Name </p>
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}

                            </div>
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Phone number</p>
                                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="grid-contact">
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Email</p>
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                        <p class="your-para msg-para">MESSAGE</p>
                    {!! Form::textarea('message', null, ['class' => 'form-control','rows'=>10]) !!}
                        <div class="send">
                            <input type="submit" value="Send " >
                        </div>

                </div>
{!! Form::close() !!}
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@stop