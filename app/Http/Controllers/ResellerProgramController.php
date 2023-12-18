<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResellerProgramController extends Controller
{
    public function index(){
            return view('reseller_program');
        }

}