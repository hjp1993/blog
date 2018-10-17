<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntryController extends Controller
{
    //
    public function loginForm()
    {
        echo 123;
        $data = 123;
        return view('admin.login');
    }
}
