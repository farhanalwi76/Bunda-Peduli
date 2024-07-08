<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rombel;

class RombelController extends Controller
{
    public function index(){
        return view('admin.rombel.index');
    }
}
