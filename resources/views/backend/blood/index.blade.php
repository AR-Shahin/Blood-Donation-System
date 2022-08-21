
@extends('layouts.backend_master')
@section('title', 'Blood')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2 class="text-info">Blood List</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover text-center table-sm">
                    <tr>
                        <th>SL</th>
                        <th>Group Name</th>
                        <th>Donor</th>
                        <th>Available</th>
                        <th>Actions</th>
                    </tr>
                    <tbody id="tbody">
                        @foreach ($bloods as $blood)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $blood->name }}</td>
                            <td>{{ $blood->donors_count }}</td>
                            <td>8</td>
                            <td>
                                <a href="{{ route('admin.blood.donors',$blood->id) }}" class="btn btn-sm btn-success">View</a>
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


