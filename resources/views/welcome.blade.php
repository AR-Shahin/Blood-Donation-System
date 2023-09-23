@extends('layouts.frontend_app')


@section('app_content')
<x-frontend.navbar-component/>
    <section class="hero_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset("frontend/hero.jpg") }}" alt="" class="w-100">
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="box">
                        <h1>BLOOD <br> DONATION</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, corrupti.</p>
                        <div class="btn-box">
                            <a href="{{ route('donor.registration') }}" class="btn btn-sm btn-danger fa-fade">Be A Donor</a>
                            <a href="{{ route('user.registration') }}" class="btn btn-sm btn-danger mx-2">Be A Consumer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <x-frontend.about_section/>
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
    <h2 class="text-center">Donors List</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table-bordered table text-center">
                        <tr>
                            <th>SL</th>
                            <th>Blood Group</th>
                            <th>Total Donor</th>
                            <th>Available Donor</th>
                        </tr>
                        @foreach (\App\Models\Blood::get() as $blood)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $blood->name }}</td>
                            <td>{{ $blood->donors->count()}}</td>
                            <td>{{ count($blood->available_donors)}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
  <x-frontend.footer/>
@stop
