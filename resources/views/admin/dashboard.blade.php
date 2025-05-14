@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>🧑‍⚕️ Admin Dashboard</h1>
        <div class="cards">
            <div class="card">
                <h4>Total Ambulances</h4>
                <p>{{ $ambulanceCount }}</p>
            </div>
            <div class="card">
                <h4>Active Emergencies</h4>
                <p>{{ $emergencyCount }}</p>
            </div>
        </div>
    </div>
@endsection
