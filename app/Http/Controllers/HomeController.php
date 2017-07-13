<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unirest;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }
    public function convert(Request $request){


        $response = Unirest\Request::get("http://apilayer.net/api/live?access_key=3502a040cdeb142108c0ae34762f380a&currencies=NGN&source=USD&format=1");


        $data = $response->body->quotes;        // Parsed body

        if($response->code != 200){
            echo "error";

        }else{
            $val=$data->USDNGN;
            return view('home',['val'=>$val]);
        }

    }
}
