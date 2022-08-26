
@extends('layouts.backend_master')
@section('title', 'Donor')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="text-info">Donor List</h2>
            </div>
            <div class="card-body">
                <table class="display table table-bordered table-hover text-center dataTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Donation</th>
                            <th>Last Donation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donors as $donor)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $donor->name }}</td>
                            <td>10</td>
                            <td>8</td>
                            <td>8</td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">View</a>
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
