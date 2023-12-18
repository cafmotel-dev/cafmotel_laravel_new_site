<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversationalAiController extends Controller
{
    public function index(){
            return view('conversational_ai');
        }

}