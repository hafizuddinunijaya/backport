<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'


        ]);
        return $req->input();

    }
}
