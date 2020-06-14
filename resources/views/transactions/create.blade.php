@extends('layouts.laravelAppLayout')

@section('content')

    <h1>Enter your transaction details</h1>
    <br>
    <p align="right">Current Balance:</p>

    <form method="post" action="{{ route('transactions.store') }}">
        @csrf

{{--        {{ route('posts.store') }}--}}

        <div class="form-group">


            {{--            token--}}

            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>


        <div class="form-group">

            {{--            token--}}

            <label for="body">Body</label>
            <input type="text" class="form-control" name="body" placeholder="Body"/>
        </div>
        <div>
        <p>Choose transaction type:</p>

        <input type="radio" id="deposit" name="type" value="deposit">
        <label for="deposit">Deposit</label><br>

        <input type="radio" id="withdraw" name="type" value="withdraw">
        <label for="withdraw">Withdraw</label><br>
        </div>
        <br>
        <div class="form-group">


            {{--            token--}}

            <label for="amount">Enter Amount</label>
            <input type="text" class="form-control" name="amount" placeholder="Enter the amount in rupees"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection
