<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DriverApprovalController extends Controller
{
    public function index()
    {
        $drivers = User::where('role', 'driver')->get();
        return view('admin.drivers.index', compact('drivers'));
    }

    public function approve($id)
    {
        User::where('id', $id)->update(['status' => 'approved']);
        return back()->with('success', 'Driver approved successfully.');
    }

    public function reject($id)
    {
        User::where('id', $id)->update(['status' => 'rejected']);
        return back()->with('error', 'Driver rejected.');
    }
}

