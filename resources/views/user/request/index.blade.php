
@extends('layouts.user_master')
@section('title', 'Blood Request')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h2 class="text-info">Blood Request List</h2>
                <div>
                    <a href="{{ route('user.request.create') }}" class="btn btn-sm btn-success">Make A Request</a>
                </div>
            </div>
            <div class="card-body">
                <table class="dataTable table table-bordered table-hover text-center table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Group Name</th>
                            <th>Donor</th>
                            <th>Available</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach ($user->blood_requests as $request)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $request->name }}</td>

                            <td>8</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection


