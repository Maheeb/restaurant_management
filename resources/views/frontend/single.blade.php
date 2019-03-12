@extends('layouts.fmain')

@section('content')
    <!--content-->
    <div class="blog">
        <div class="container">

            <div class="col-md-9 ">
                <!--content-->
                <div class="single">



                        <div class="single-top">
                            <img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="{{asset('frontend/images/'.$blog->image)}}" alt="" />
                            <div class="lone-line">
                                <h4>{{$blog->title}}</h4>
                                <ul class="grid-blog">
                                    <li><span><i class="glyphicon glyphicon-time"> </i>{{$blog->created_at->diffForHumans()}}</span></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-comment"> </i>{{$blog->comment()->count()}} Comment</a></li>

                                </ul>
                                <p class="wow fadeInLeft animated" data-wow-delay=".5s">
                                    {{$blog->body}}
                                </p>
                            </div>
                        </div>





                    <div class="comment">
                        <h3>Comments</h3>

                            @foreach ($coms as $com)
                                <div class="media wow fadeInLeft animated" data-wow-delay=".5s">
                                    <div class="code-in">
                                        <p class="smith"><a href="#">{{$com->name}}</a> <span>{{$com->created_at->diffForHumans()}}</span></p>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="media-body">

                                        <p>{{$com->comment}}</p>
                                    </div>
                                </div>
                            @endforeach





                    </div>


                    <div class="leave">
                        <h3>Leave a comment</h3>
                        @if(session('message'))
                            <div class="alert alert-info">
                                {{ session('message') }}
                            </div>
                        @endif
                        {!! Form::open(['route'=>['com.sucs',$blog->id]]) !!}
                        {{csrf_field()}}
                            <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
                                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <div class="form-group">
                                {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Name']) !!}
                            </div>

                                <div class="form-group">
                                {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'E-mail']) !!}

                                </div>

                                <div class="form-group">
                                {!! Form::textarea('comment', null, ['class' => 'form-control','rows'=>10,'placeholder'=>'Comment']) !!}
                                </div>
                                <label class="hvr-rectangle-out">
                                    <input type="submit" value="Send">
                                </label>
                            </div>

                    </div>
                    {!! Form::close() !!}
                </div>
                <!---->
                <!--//content-->

            </div>

            <div class="col-md-3 categories-grid">


                <div class="blog-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
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
    <!--//content-->
@stop