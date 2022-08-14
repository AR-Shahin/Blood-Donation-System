@extends('layouts.frontend_app')


@section('app_content')
<x-frontend.navbar-component/>
<div class="container mt-3">
    <h3 class="text-center">Be a Blood Donor</h3>

    <form action="" class="mt-2">
        <div class="row">
            <x-frontend.input-component label="Name" name="name" placeholder="Enter Your Name"/>
            <x-frontend.input-component label="Email" name="email" placeholder="Enter Your Email"/>
            <x-frontend.input-component label="Phone" name="phone" placeholder="Enter Your Phone"/>
            <x-frontend.input-component label="Password" name="password" placeholder="Enter Your Password"/>

            <x-frontend.select-component label="Divison" name="division_id" :data="$divisons"/>
        </div>
    </form>
</div>
@stop
