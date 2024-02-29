@extends('adminlte::page')

@section('title')
Details of employe | Laravel Employes App

@endsection

@section('content_header')
    <h1>Employe details</h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row my-5">
            <div class="col-md-10 auto">
                <div class="card my-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-bold text-uppercase">{{$employes->fullname }}</h3>
                    </div>
                    <div class="text-center font-weight-bold text-uppercase">
                        <a href="{{route('vacation.request' ,$employes->registration_number)}}"class="btn btn-outline-dark">
                            Vacation Request
                        </a>
                        <a href="{{route('certificate.request' ,$employes->registration_number)}}"class="btn btn-outline-danger">
                            Work Certificate
                        </a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name">Fullname:</label>
                            <p>{{ $employes->fullname }}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Registration number:</label>
                            <p>{{ $employes->registration_number }}</p>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <p>{{ $employes->phone }}</p>
                        </div>
                        <div class="form-group">
                            <label for="phone">Departement:</label>
                            <p>{{ $employes->depart }}</p>
                        </div>
                        <div class="form-group">
                            <label for="phone">Hired date:</label>
                            <p>{{ $employes->hire_date }}</p>
                        </div>
                        <div class="form-group">
                            <label for="phone">City:</label>
                            <p>{{ $employes->city }}</p>
                        </div>
                        <div class="form-group">
                            <label for="phone">Adress:</label>
                            <p>{{ $employes->address }}</p>
                        </div>
                       

                        <a href="{{ route('employes.edit', $employes->registration_number) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('employes.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





