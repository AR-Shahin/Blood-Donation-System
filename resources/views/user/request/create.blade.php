
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
                        <div class="col-md-3">
                            <label for=""><b>Blood : </b></label>
                            <select name="blood_id" id="blood_id" class="form-control" value={{ old("blood_id") }}>
                                <option value="">Select a Blood</option>
                                @foreach ($bloods as $blood)
                                <option value="{{ $blood->id }}">{{ $blood->name }} __ [{{ count($blood->available_donor_in_user_area) }}]</option>
                                @endforeach
                            </select>
                            @error("blood_id")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                    <div class="col-md-3">
                        <label for=""><b>Date : </b></label>
                        <input type="date" class="form-control" name="date" id="date" min="{{ date('Y-m-d') }}" value="{{ old('date') }}">
                        @error("date")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <x-frontend.input-component label="Time" name="time" placeholder="Enter Your Time"/>
                    <div class="col-md-3">
                        <label for=""><b>Address : </b></label>
                        <textarea class="form-control" rows="1" name ="address" cols="50" placeholder="Describe Address here...(United Hospital Limited, Plot 15 Rd No 71, Dhaka 1212)"></textarea>
                        @error("address")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="row mt-1">
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


