
@extends('layouts.backend_master')
@section('title', 'User')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="text-info">User {{ $user->name }}</h3>
                <div>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-sm text--center table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                        <th>Phone</th>
                        <td>{{ $user->phone }}</td>
                    </tr>

                    <tr>
                        <th>Division</th>
                        <td>{{ $user->upazila->district->division->name }}</td>
                        <th>District</th>
                        <td>{{ $user->upazila->district->name }}</td>
                        <th>Upazila</th>
                        <td>{{ $user->upazila->name }}</td>
                    </tr>

                    <tr>
                        <th>Blood</th>
                        <td>{{ $user->blood->name }}</td>
                        <th>Date of birth</th>
                        <td>{{ $user->date_of_birth }}</td>
                        {{-- <th>Last Donation</th>
                        <td>{{ $user->last_donation }}</td> --}}
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{ $user->status ?? "NULL" }}</td>
                        <th>Total Take</th>
                        <td><span class="badge badge-success badge-pill">{{ rand(10,20) }}</span></td>
                        {{-- <th>Last Donation</th>
                        <td>{{ $user->last_donation }}</td> --}}
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection



