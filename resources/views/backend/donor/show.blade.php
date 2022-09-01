
@extends('layouts.backend_master')
@section('title', 'Donor')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="text-info">Donor {{ $donor->name }}</h3>
                <div>
                    <a href="{{ route('admin.donor.index') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-sm text--center table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <td>{{ $donor->name }}</td>
                        <th>Email</th>
                        <td>{{ $donor->email }}</td>
                        <th>Phone</th>
                        <td>{{ $donor->phone }}</td>
                    </tr>

                    <tr>
                        <th>Division</th>
                        <td>{{ $donor->upazila->district->division->name }}</td>
                        <th>District</th>
                        <td>{{ $donor->upazila->district->name }}</td>
                        <th>Upazila</th>
                        <td>{{ $donor->upazila->name }}</td>
                    </tr>

                    <tr>
                        <th>Blood</th>
                        <td>{{ $donor->blood->name }}</td>
                        <th>Date of birth</th>
                        <td>{{ $donor->date_of_birth }}</td>
                        <th>Last Donation</th>
                        <td>{{ $donor->last_donation }}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{ $donor->status ?? "NULL" }}</td>
                        <th>Total Donate</th>
                        <td><span class="badge badge-success badge-pill">{{ count($donor->blood_requests )}}</span></td>
                        {{-- <th>Last Donation</th>
                        <td>{{ $donor->last_donation }}</td> --}}
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection



