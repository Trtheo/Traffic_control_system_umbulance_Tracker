<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ambulance;
use App\Models\Emergency;

class AdminDashboardController extends Controller
{
    //
        public function index()
    {
        return view('admin.dashboard', [
            'ambulanceCount' => Ambulance::count(),
            'emergencyCount' => Emergency::count(),
        ]);
    }
}
