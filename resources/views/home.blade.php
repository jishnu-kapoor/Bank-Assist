@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">This is your Dashboard</div>
                <h6 align="right">Current Balance: {{$balance ??'Attention Required'}}</h6>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are now logged in!
                        <a href="{{ route('transactions.create') }}">Create a transaction</a>

                        <div class=>
                            <br>
                            <p align="">A list of all transactions made by you:</p><br>
                        </div>
                        @if (count ($transactions) > 0)

                            @foreach($transactions as $transaction)

                                <div class="jumbotron" >

                                    <h3>ID: {{$transaction->id}}</h3>
                                    <h3> Title: {{$transaction->title}}</h3>
                                    <h3> Description: {{$transaction->body}}</h3>
                                    <h3> Balance: {{$transaction->balance}}</h3>
                                    <h3> Type: {{$transaction->type}}</h3>
                                    <h3> Deposit Amount: {{$transaction->deposit}}</h3>
                                    <h3> Withdrawal Amount: {{$transaction->withdraw}}</h3>
                                    {{--                redirect to the post id--}}

                                    <small>Written on {{$transaction->created_at}}</small>




                                </div>
                            @endforeach

{{--                            {{$transaction->links()}}--}}
                        @else
                            <p>No Transactions Found</p>
                        @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
