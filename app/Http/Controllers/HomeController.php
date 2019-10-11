<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

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
        // // $role = Role::create(['name' => 'admin']);
        $user = Auth::user();
        // $user->assignRole('admin');

        if($user->hasRole('admin')){
            return view('home');
        }else{
            return view('noneAdmins');
        }

    }
}
