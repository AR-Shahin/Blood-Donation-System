
@extends('layouts.backend_master')
@section('title', 'Donor')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="text-info">Donor List <span class="badge badge-success badge-pill">{{ count($donors) }}</span></h2>
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
                            <th>Last Donation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donors as $donor)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $donor->name }}</td>
                            <td>{{ $donor->blood->name }}</td>
                            <td>{{ $donor->phone }}</td>
                            <td>{{ $donor->upazila->name }}</td>
                            <td>{{ $donor->last_donation ?? "New" }}</td>
                            <td>
                                <a href="{{ route('admin.donor.show',$donor->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
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
