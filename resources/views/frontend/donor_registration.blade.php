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

            <div class="col-md-3 mt-2">
                <label for=""><b>District : </b></label>
                <select name="district_id" id="district_id" class="form-control">
                    <option value="">Select a District</option>

                </select>
                @error("district_id")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-2">
                <label for=""><b>Upazila : </b></label>
                <select name="upazila_id" id="upazila_id" class="form-control">
                    <option value="">Select a Upazila</option>

                </select>
                @error("upazila_id")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </form>
</div>
@stop
@push('js')
<script>
    const division_id = $$('#division_id');
        const district_id = $$('#district_id');
        const upazila_id = $$('#upazila_id');

        const appendData = (items,element,title) => {
            let html = `<option value="">Select A ${title}</option>`;

            items.forEach(item => {
                html += `<option value="${item.id}">${item.name}</option>`;
            });

            element.innerHTML = html;
        }


        division_id.addEventListener("change",async (e)=>{
            let id = e.currentTarget.value;
            if(id === ""){
            upazila_id.innerHTML = '<option value="">Select A Upazila</option>';
            district_id.innerHTML = '<option value="">Select A District</option>';

            }
            upazila_id.innerHTML = '<option value="">Select A Upazila</option>';
            let url = `${base_url}/division-districts/${id}`;

            const {data:{districts}} = await axios.get(url);

            appendData(districts, district_id,"District");
        });

        district_id.addEventListener("change",async (e)=>{
            let id = e.currentTarget.value;

            let url = `${base_url}/district-upazilas/${id}`;

            const {data:{upazilas}} = await axios.get(url);

            log(upazilas)
            appendData(upazilas, upazila_id,"Upazila");

        });

</script>
@endpush
