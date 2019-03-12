@extends('layouts.fmain')

@section('content')
    <div class="content">
        <div class="events">
            <div class="container">
                <div class="events-top">
                    <div class="col-md-4 events-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <h3>Events</h3>
                        <label><i class="glyphicon glyphicon-menu-up"></i></label>
                        <span>There are many variations</span>
                    </div>
                    <div class="col-md-8 events-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                @foreach ($recs as $rec)
                    <div class="events-bottom">
                        <div class="col-md-5 events-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <a href="{{route('single',$rec->id)}}"><img src="{{asset('frontend/images/'.$rec->image)}}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="col-md-7 events-bottom2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <h3>{{$rec->title}}</h3>
                            <label><i class="glyphicon glyphicon-menu-up"></i></label>
                            <p>{{$rec->body}}
                            </p>
                            <div class="read-more">
                                <a class="link link-yaku" href="{{route('single',$rec->id)}}">
                                    <span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@stop