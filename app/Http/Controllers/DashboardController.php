<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use App\Models\Emergency;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard', [
            'ambulanceCount' => Ambulance::count(),
            'emergencyCount' => Emergency::count(),
        ]);
    }
}

