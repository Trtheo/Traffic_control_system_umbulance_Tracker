@extends('layouts.app')

@section('content')
<div class="container">
    <h2>🚑 Pending Ambulance Drivers</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Hospital</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($drivers as $driver)
            <tr>
                <td>{{ $driver->name }}</td>
                <td>{{ $driver->phone_number }}</td>
                <td>{{ $driver->hospital_name }}</td>
                <td>{{ ucfirst($driver->status) }}</td>
                <td>
                    @if ($driver->status === 'pending')
                        <form action="{{ route('admin.drivers.approve', $driver->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Approve</button>
                        </form>
                        <form action="{{ route('admin.drivers.reject', $driver->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                        </form>
                    @else
                        <span class="text-muted">Already {{ $driver->status }}</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
