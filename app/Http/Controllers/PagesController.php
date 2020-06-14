<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title="Welcome to the banking assistance system!";
        return view ('pages.index')->with('title',$title);
    }
    public function about()
    {
        return view ('pages.about');
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services_set'=> ['Customer Support','Banker Support']

        );
        return view ('pages.services')->with($data);

    }

    public function login()
    {
        $title="Login here to view details";
        return view ('pages.login')->with('title',$title);

    }
    public function customer()
    {
        $title="Welcome Customer";
        return view ('pages.customerArea')->with('title',$title);
    }

    public function banker()
    {
        $title="Welcome Banker";
        return view ('pages.bankerArea')->with('title',$title);
    }
}

