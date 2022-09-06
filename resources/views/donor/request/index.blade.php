
@extends('layouts.donor_master')
@section('title', 'Blood Request')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h2 class="text-info">New Blood Request</h2>
                <div class="align-self-center">
                    <a href="{{ route('donor.request.own') }}" class="btn btn-sm btn-success">My Request</a>
                </div>
            </div>
            <div class="card-body">
                <table class="dataTable table table-bordered table-hover text-center table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Group Name</th>
                            <th>Date</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Time</th>
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
                            <td>{{ $request->user->name ?? "NULL" }}</td>
                            <td>{{ $request->status }}</td>
                            <td>{{ $request->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('donor.request.show',$request->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                <form class="d-inline" action="{{ route('donor.request.accept',$request->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    <button class="btn btn-sm btn-success">Accept</button>
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


