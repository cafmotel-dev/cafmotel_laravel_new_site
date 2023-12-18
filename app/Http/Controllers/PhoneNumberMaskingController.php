<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneNumberMaskingController extends Controller
{
    public function index(){
            return view('ph_no_masking');
        }

}