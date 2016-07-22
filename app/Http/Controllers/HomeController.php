<?php

namespace App\Http\Controllers;
use Storage;
use App\Http\Requests;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use Session;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
    public function upload(Request $request)
    {
        
        // dd($request->file('image')->getRealPath());
       
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $destinationPath= storage_path('app/images/uploads/');
            $filename=str_random(10).date("Ymd").'.'.$request->file('image')->getClientOriginalExtension();
         $request->file('image')->move($destinationPath,$filename);

        return 'There is an image file';
    }else{
        return 'No file';
    }
    }
    public function uploadFile()
    {
        return view('imageUpload');
    }
    
}
