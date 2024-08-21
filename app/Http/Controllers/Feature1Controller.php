<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Feature1Controller extends Controller
{
    //
    public ?Feature $feature = null;
    public function __construct() {}
    public function index() {}
    public function calculate(Request $request) {}
}
