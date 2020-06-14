@extends('layouts.laravelAppLayout')

@section('content')

    <h1>Transactions</h1>
    <a href ="/laravel/public/transactions/" class = "btn btn-default">Go back</a>

    <div class="jumbotron" >
        <h6>ID:{{$transaction->id}}</h6>
        <h3>{{$transaction->title}}</h3>
        <p>{{$transaction->balance}}</p>
        {{--                redirect to the post id--}}
        <div class="row-cols-md-1">
            <small>Created at {{$post->created_at}}</small>
            <br>
            <small>Updated at {{$post->updated_at}}</small>
        </div>
    </div>


@endsection
