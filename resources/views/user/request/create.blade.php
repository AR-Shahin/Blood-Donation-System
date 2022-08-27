
@extends('layouts.user_master')
@section('title', 'Blood Request')
@section('master_content')

<div class="row justify-content-center pt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h2 class="text-info">Create A Blood Request</h2>
                <div>
                    <a href="{{ route('user.request.index') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('user.request.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <x-frontend.select-component label="Blood Group" name="blood_id" :data="$bloods"/>
                    <div class="col-md-3">
                        <label for=""><b>Date : </b></label>
                        <input type="date" class="form-control" name="date" id="date" min="{{ date('Y-m-d') }}">
                        @error("date")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for=""><b>Address : </b></label>
                        <textarea class="form-control" rows="4" name ="address" cols="50" placeholder="Describe Address here...(United Hospital Limited, Plot 15 Rd No 71, Dhaka 1212)"></textarea>
                        @error("address")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-sm btn-success">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection


