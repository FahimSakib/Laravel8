<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return "this ia index function of Welcome Controller";
    }

    public function delete()
    {
        return "this ia delete function of Welcome Controller";
    }

    public function show($welcome)
    {
        return "this ia show function of Welcome Controller for: ".$welcome;
    }
}
