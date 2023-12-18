<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutboundCallServiceController extends Controller
{
    public function index(){
            return view('outbound_call_service');
        }

}