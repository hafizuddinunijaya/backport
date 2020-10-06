<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UsersImportController extends Controller
{
    public function show()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $file=$request->file('file');
        Excel::import(new UsersImport,$file);

        return back()->withStatus('Excel file imported');
    }
}
