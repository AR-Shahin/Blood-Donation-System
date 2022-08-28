@extends('layouts.frontend_app')


@section('app_content')
<x-frontend.navbar-component/>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <div class="card">
                <div class="card-body">
                    <p>Register to save people's lives
                        রক্তদাতা হতে রেজিস্ট্রেশন করুন</p>
                    <a href="{{ route('donor.registration') }}" class="btn btn-sm btn-success">Be a Donor</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="card">
                <div class="card-body">
                    <p>Register to save people's lives
                        রক্তদাতা হতে রেজিস্ট্রেশন করুন</p>
                    <a href="{{ route('user.registration') }}"" class="btn btn-sm btn-info">Be a Consumer</a>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table-bordered table text-center">
                        <tr>
                            <th>SL</th>
                            <th>Blood Group</th>
                            <th>Available Donor</th>
                        </tr>
                        @foreach (\App\Models\Blood::get() as $blood)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $blood->name }}</td>
                            <td>{{ $blood->donors->count()}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
@stop
