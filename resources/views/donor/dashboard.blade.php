@extends('layouts.donor_master')
@section('title','Donor Dashboard')
@section('master_content')

<div class="row">
    <div class="col-md-4 pt-3">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td>{{ $user->blood->name }}</td>
                    </tr>
                    <tr>
                        <th>Last Donation</th>
                        <td>{{ $user->last_donation}}</td>
                    </tr>
                    <tr>
                        <th>Upazila</th>
                        <td>{{ $user->upazila->name }}</td>
                    </tr>
                    <tr>
                        <th>District</th>
                        <td>{{ $user->upazila->district->name }}</td>
                    </tr>
                    <tr>
                        <th>Divison</th>
                        <td>{{ $user->upazila->district->division->name }}</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>

@stop
