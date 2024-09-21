<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // dump('sono la funzione index della dasboard');
        return view('admin.index');
    }
}
