@extends('layouts.frontend_app')


@section('app_content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">BloodDonor</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup" ">
        <div class="navbar-nav" >
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <div class="card">
                <div class="card-body">
                    <p>Register to save people's lives
                        রক্তদাতা হতে রেজিস্ট্রেশন করুন</p>
                    <a href="" class="btn btn-sm btn-success">Be a Donor</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="card">
                <div class="card-body">
                    <p>Register to save people's lives
                        রক্তদাতা হতে রেজিস্ট্রেশন করুন</p>
                    <a href="" class="btn btn-sm btn-info">Be a Consumer</a>
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
                            <td>{{ rand(20,30) }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
@stop
