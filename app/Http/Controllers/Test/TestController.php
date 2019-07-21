<?php

namespace App\Http\Controllers\Test;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index() {
        return view('test.test');
    }
}
