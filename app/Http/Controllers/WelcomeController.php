<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function showWelcome()
    {
        // return "Welcome to Laravel!"; this for Task 4 coach
        $url = route('welcome');
        return $url;
    }
}