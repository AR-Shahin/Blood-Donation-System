
@extends('layouts.donor_master')
@section('title', 'Blood Request')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h2 class="text-info">Blood Request</h2>
                <div>
                    <a href="{{ route('donor.request.index') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="card-body">
                <table class="dataTable table table-bordered table-hover text--center table-sm">
                    <tr>
                        <th>Address</th>
                        <td>{{ $request->address }}</td>
                    </tr>

                     <tr>
                        <th>Donation Time</th>
                        <td>{{ $request->time }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $request->date }}</td>
                    </tr>
                     <tr>
                        <th>Req Date</th>
                        <td>{{ $request->created_at->format("Y-m-d") }}</td>
                    </tr>
                    <tr>
                        <th>User Name</th>
                        <td>{{ $request->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $request->user->phone }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $request->user->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection


