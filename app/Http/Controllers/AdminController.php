<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_user_account;
class AdminController extends Controller
{
    function login(Request $req)
    {
        return _user_account::where(['username'=>$req->email])->first();
    }
}
