@extends('layouts.fmain')

@section('content')
    <div class="blog">
        <div class="container">
            <div class="menu-top">
                <div class="col-md-4 menu-left">
                    <h3>Blog</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <span>There are many variations</span>
                </div>
                <div class="col-md-8 menu-right">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-9 blog-header">
                <div class=" blog-head">
                    @foreach ($blogs as $blog)
                    <div class="col-md-4 blog-top">
                        <div class="blog-in">
                            <a href="{{route('single',$blog->id)}}"><img class="img-responsive" src="{{asset('frontend/images/'.$blog->image)}}" alt=" "></a>
                            <div class="blog-grid">
                                <h3><a href="{{route('single',$blog->id)}}">{{$blog->title}}</a></h3>
                                <div class="date">
                                    <span class="date-in"><i class="glyphicon glyphicon-calendar"> </i>{{$blog->created_at->diffForHumans()}}</span>
                                    <a href="{{route('single',$blog->id)}}" class="comments"><i class="glyphicon glyphicon-comment"></i>{{$blog->comment()->count()}}</a>
                                    <div class="clearfix"> </div>
                                </div>


                                <p>{{$blog->midSize()}}</p>
                                <div class="more">
                                    <a class="link link-yaku" href="{{route('single',$blog->id)}}">
                                        <span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="col-md-3 categories-grid">
                {{--<div class="search-in animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">--}}
                    {{--<h4>Search</h4>--}}
                    {{--<div class="search">--}}
                        {{--<form>--}}
                            {{--<input type="text" placeholder="Search" required="" >--}}
                            {{--<input type="submit" value="" >--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="blog-bottom animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h4>Recent Posts</h4>

                    @foreach ($recs as $rec)
                        <div class="product-go">
                            <a href="{{route('single',$rec->id)}}" class="fashion"><img class="img-responsive " src="{{asset('frontend/images/'.$rec->image)}}" alt=""></a>
                            <div class="grid-product">
                                <a href="{{route('single',$rec->id)}}" class="elit">{{$rec->title}}</a>
                                <p>{{$rec->midSize()}}</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    @endforeach


                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@stop