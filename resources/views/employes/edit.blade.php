@extends('adminlte::page')



@section('title')
Update employe | Laravel Employes App

@endsection

@section('content_header')
    <h1>Update employe</h1>
@endsection




@section('content')
   

    <div class="container">
        @include('layouts.alert')
        <div class="row my-5">
            <div class="col-md-10 auto">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>Update employe</h3>
                        </div>
                       
                    </div>
                    <div class="card-body">
                        <form action="/admin/employes/{{($employes->registration_number)}}" 
                            method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                        
                            
                            <div class="form-group mb-3">
                                <label for="fullname">FullName</label>
                                <input type="text" class="form-control"
                                    name="fullname" placeholder="Fullname"
                                    value="{{$employes->fullname}}">
                            </div>

                           

                            <div class="form-group mb-3">
                                <label for="fullname">Departement</label>
                                <input type="text" class="form-control"
                                    name="depart" placeholder="Departement"
                                    value="{{$employes->depart}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="hire_date">Hire Date</label>
                                <input type="date" class="form-control"
                                    name="hire_date" placeholder="Hire Date"
                                    value="{{$employes->hire_date}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control"
                                    name="phone" placeholder="Phone"
                                    value="{{$employes->phone}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="fullname">Address</label>
                                <input type="text" class="form-control"
                                    name="address" placeholder="Address"
                                    value="{{$employes->address}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="city">City</label>
                                <input type="text" class="form-control"
                                    name="city" placeholder="City"
                                    value="{{$employes->city}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Update 
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
                
        </div>
    </div>

@endsection

