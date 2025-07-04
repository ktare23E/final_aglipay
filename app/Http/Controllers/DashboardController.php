<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Vision\V1\ImageAnnotationContext;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        return Inertia::render('Dashboard');
    }
}
