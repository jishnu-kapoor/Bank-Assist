<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

//        $transactions = Transaction::orderBy('balance','desc')->paginate(10);
        $transactions = DB:: select("SELECT * FROM transactions ORDER BY id DESC");
        return view('home')->with('transactions', $transactions);
    }

    public function create()
    {

        //
        return view('transactions.create')->with('title',$title);

    }
    public function show($id)
    {
        $transaction = User::find($id);
        return view ('transactions.show')->with('post', $transaction);
    }


}
