
@extends('layouts.backend_master')
@section('title', 'User')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="text-info">User List <span class="badge badge-success badge-pill">{{ count($users) }}</span></h2>
            </div>
            <div class="card-body">
                <table class="display table table-bordered table-hover text-center dataTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Phone</th>
                            <th>Upazila</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->blood->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->upazila->name }}</td>
                            <td>
                                <a href="{{ route('admin.user.show',$user->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <form action="" class="d-inline">
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
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


@push('css')

@endpush
@push('script')


@endpush
