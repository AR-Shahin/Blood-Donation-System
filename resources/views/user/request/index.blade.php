
@extends('layouts.user_master')
@section('title', 'Blood Request')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h2 class="text-info">Blood Request List</h2>
                </div>
                <div class=" align-self-center" >
                    <a href="{{ route('user.request.create') }}"  class="btn btn-sm btn-info">Make A Request</a>
                </div>
            </div>
            <div class="card-body">
                <table class="dataTable table table-bordered table-hover text-center table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Group Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Address</th>
                            <th>Donor</th>
                            <th>Status</th>
                            <th>Req Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach ($user->blood_requests as $request)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $request->blood->name }}</td>
                            <td>{{ $request->date}}</td>
                            <td>{{ $request->time}}</td>
                            <td>{{ $request->address }}</td>
                            <td>{{ $request->donor->name ?? "NULL" }}</td>
                            <td>{{ $request->status }}</td>
                            <td>{{ $request->created_at->diffForHumans() }}</td>
                            <td>
                                @if ($request->status == "pending")
                                <form action="{{ route('user.request.delete',$request->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                                @else
                                <button class="btn btn-sm btn-success">Accepted</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection


