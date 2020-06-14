@extends('layouts.laravelAppLayout')

@section('content')


    <h1>{{$title}}</h1>
<p>This is the list of available services:</p>


    @if(count($services_set) > 0)

        <ul class ="list-group">

            @foreach($services_set as $service)

                <li class="list-group-item"><a href="login">{{$service}}</a></li>


            @endforeach
        </ul>

        @endif



@endsection
