@extends('adminlte::page')



@section('title')
Add new employe | Laravel Employes App

@endsection

@section('content_header')
    <h1>Add new employe</h1>
@endsection




@section('content')
   

    <div class="container">
        @include('layouts.alert')
        <div class="row my-5">
            <div class="col-md-10 auto">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>Add new employe</h3>
                        </div>
                       
                    </div>
                    <div class="card-body">
                        <form action="{{route('employes.store')}}" 
                            method="POST" class="mt-3">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="fullname">Registration Number</label>
                                <input type="text" class="form-control"
                                    name="registration_number" placeholder="Registration Number"
                                    value="{{old('register_number')}}">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="fullname">FullName</label>
                                <input type="text" class="form-control"
                                    name="fullname" placeholder="Fullname"
                                    value="{{old('fullname')}}">
                            </div>

                           

                            <div class="form-group mb-3">
                                <label for="fullname">Departement</label>
                                <input type="text" class="form-control"
                                    name="depart" placeholder="Departement"
                                    value="{{old('depart')}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="hire_date">Hire Date</label>
                                <input type="date" class="form-control"
                                    name="hire_date" placeholder="Hire Date"
                                    value="{{old('hire_date')}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control"
                                    name="phone" placeholder="Phone"
                                    value="{{old('phone')}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="fullname">Address</label>
                                <input type="text" class="form-control"
                                    name="address" placeholder="Address"
                                    value="{{old('adress')}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="city">City</label>
                                <input type="text" class="form-control"
                                    name="city" placeholder="City"
                                    value="{{old('city')}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
                
        </div>
    </div>

@endsection

