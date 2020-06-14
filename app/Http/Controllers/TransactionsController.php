<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $transactions = Transaction::orderBy('created_at','desc')->paginate(10);
        return view('transactions.index')->with('transactions', $transactions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title= "Transaction creation page";
        //
        return view('transactions.create')->with('title',$title);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate
        ($request, [
            'title'=>'required',
            'body'=>'required',
            'type'=>'required',
            'amount'=>'required'

        ]);

        //Create Post
        $transaction = new Transaction();


        $transaction->title = $request ->input('title'); //get from form
        $transaction->body = $request ->input('body');
//        $transaction->type = $request ->input('type');


        $transaction->type = $request ->input('type');
        $transaction->amount = $request ->input('amount');
        $transaction->balance = $request ->input('balance');
        $balance="Attention";


        $currentbalance = DB:: select("SELECT * FROM transactions WHERE tid = ");


        if($transaction->type ==='deposit')
        {
            $transaction->balance+=$transaction->amount;

            $deposit=$transaction->amount;
            $withdraw=0;
            $transaction->deposit = $deposit;
            $transaction->withdraw= $withdraw;
        }
        elseif($transaction->type ==='withdraw')
        {
            $transaction->balance-=$transaction->amount;
            $withdraw=$transaction->amount;
            $deposit=0;
            $transaction->withdraw = $withdraw;
            $transaction->deposit= $deposit;
        }

        $transaction->save();

        return redirect('/home')->with('success', "Transaction successfully done!")->with('balance',$balance);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
        return view ('transactions.show')->with('post', $transaction);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
