@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">🚑 Admin Dashboard</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Registered Ambulances</div>
                <div class="card-body">
                    <h4 class="card-title">{{ $ambulanceCount }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Active Emergency Reports</div>
                <div class="card-body">
                    <h4 class="card-title">{{ $emergencyCount }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('admin.drivers.index') }}" class="btn btn-outline-dark">👤 Manage Driver Requests</a>
    </div>
</div>
@endsection
