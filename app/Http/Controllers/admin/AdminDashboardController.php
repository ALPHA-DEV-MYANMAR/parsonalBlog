<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{

    // public function __construct(){
    //     $this->middleware(['auth','isadmin']);
    // }

    public function index(){

        if(Auth::user()->status == 'admin'){
            return view('admin-panel.dashboard');
        }else{
            return redirect('/');
        }
    }
}
