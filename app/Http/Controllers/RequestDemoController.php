<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestDemoController extends Controller
{
    public function index(){
            return view('request_demo');
        }

}