<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClickToCallController extends Controller
{
    public function index(){
            return view('click_to_call');
        }

}