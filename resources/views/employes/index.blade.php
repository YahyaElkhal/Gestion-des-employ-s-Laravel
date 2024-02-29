@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title')
    List of employes | Laravel Employes App

@endsection

@section('content_header')
    <h1>List of employes</h1>
@endsection




@section('content')
   

    <div class="container">
        
        <div class="row my-5">
            <div class="col-md-10 auto">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>Employes</h3>
                        </div>
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-stripped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fullname</th>
                                        <th>Departement</th>
                                        <th>Hired</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employes as $key => $employe)
                                        <tr>
                                            <th>{{$key+=1}}</th>
                                            <th>{{$employe->fullname}}</th>
                                            <th>{{$employe->depart}}</th>
                                            <th>{{$employe->hire_date}}</th>
                                            <th class="d-flex justify-content-center align-items-center">
                                                
                                                <a href="{{ route('employes.show', $employe->registration_number  ) }}" class="btn btn-sm btn-primary">Details</a>
                                                    
                                                
                                                <a href="{{ route('employes.edit', $employe->registration_number) }}" class="btn btn-sm btn-warning">Update</a>

                                                
                                                <form action="{{ route('employes.destroy', $employe->registration_number) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                                
                                                

                                            </th>
                                        </tr>
                                    
                                    @endforeach
                                </tbody>
        
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                
        </div>
    </div>

@endsection

@section ('js')
 <script>
    $(document).ready(function () {
       $('#myTable').DataTable({
          dom: 'Bfrtip',
          buttons: [
             'copyHtml5',
             'excelHtml5',
             'csvHtml5',
             'pdfHtml5',
             'print'
            
          ],
       });
    });
 </script>
 @if(session()->has('success'))
    <script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "{{session()->get('success')}}",
            showConfirmButton: false,
            timer: 2500
        });

    </script>
 @endif

@endsection