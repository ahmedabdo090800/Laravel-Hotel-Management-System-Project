<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $userType=Auth::User()->usertype;
            if($userType=='user'){
                return view('home.index');

            }elseif ($userType=='admin'){
                return view('admin.index');

            }else{
                return redirect()->back();

            }
            
        }
    }
}
