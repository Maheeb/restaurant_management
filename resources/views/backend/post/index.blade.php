@extends('layouts.admin')
@section('content')
    <h1>All Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>Body</th>
            <th>Update Product</th>
            <th>Delete Product</th>

        </tr>
        </thead>
        <tbody>


        @foreach($posts as $post)

            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td><img  width="50px" height="50px" src="{{asset('frontend/images/'.$post->image)}}" alt=""></td>

                <td>{{$post->body}}</td>

                <td><a class="btn btn-info" href="{{route('posts.edit',$post->id)}}">Update Posts</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE' ,'action'=>['PostController@destroy',$post->id]]) !!}


                    <div class="form-group">

                        {!! Form::submit('Delete Posts', ['class' => 'btn btn-danger']) !!}

                    </div>
                    {!! Form::close() !!}

                </td>
            </tr>

        @endforeach

        </tbody>
    </table>


@stop