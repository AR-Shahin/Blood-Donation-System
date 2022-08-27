
@extends('layouts.backend_master')
@section('title', 'Blood')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4 class="card-title">Donors of <span class="badge-pill badge badge-primary">{{ $blood->name }}</span></h4>
                </div>
                <div class="align-item-end" style="text-align: right">
                    <a href="{{ route('admin.blood.index') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-hover text-center table-sm dataTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Age</th>
                            <th>Last Donate</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @forelse ( $blood->donors as $donor )
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $donor->name }}</td>
                            <td>{{ $donor->phone }}</td>
                            <td>{{ $donor->age }}</td>
                            <td>{{ $donor->last_donation }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">View</a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <span class="text-danger">Donor not Available!ls</span>
                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection


