
@extends('layouts.donor_master')
@section('title', 'Blood Request')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h2 class="text-info">Blood Request</h2>
                <div>
                    <a href="{{ route('donor.request.index') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="card-body">
                <table class="dataTable table table-bordered table-hover text-center table-sm">
                    <tr>
                        <th>Address</th>
                        <td>{{ $request->address }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection


