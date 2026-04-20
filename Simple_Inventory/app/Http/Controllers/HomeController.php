<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Welcome', [
            'appName' => 'Simple Inventory',
            'message' => 'Track your products and stock here.',
        ]);
    }
}
