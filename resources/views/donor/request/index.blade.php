
@extends('layouts.donor_master')
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
                            <th>Date</th>
                            <th>Address</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach ($reqs as $request)
                        @if ($request->isDonorCanSeeThisRequest())
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $request->blood->name }}</td>
                            <td>{{ $request->date}}</td>
                            <td>{{ $request->address }}</td>
                            <td>{{ $request->user->name ?? "NULL" }}</td>
                            <td>{{ $request->status }}</td>
                            <td>
                                <form action="" class="d-inline">
                                    <button class="btn btn-sm btn-success">Pick</button>
                                </form>
                            </td>
                        @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

