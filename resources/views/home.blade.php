@extends('adminlte::page')


@section('title')
    Home / Laravel Employes App
@endsection

@section('content')
    <h1>Dashboard</h1>

    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{App\Models\Employe::count()}}</h3>
                        <p>Employes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>

                    </div>
                    <a href="{{url('admin/employes')}}" class="small-box-footer">
                        More informartions <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>

@endsection