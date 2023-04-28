<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RouteController extends Controller
{
    public function index() {
        return "This is from Controller";
    }

    public function profile() {
        return "This is Profile from Controller";
    }
}
