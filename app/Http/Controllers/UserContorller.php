<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserContorller extends Controller
{
    public function getData(){
        $user = Auth::user();
        if(empty($user)){
            return redirect()->intended('/login');
        }

        return view('users', [
            'users' => User::query()->paginate(8)
        ]);
      }
}
