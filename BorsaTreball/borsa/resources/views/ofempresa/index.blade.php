@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">
                        <div class="container">
                            <div class="row justify-content-center">
                            
                                    <div class="card">
                                 <br>
                                    <td><a  class="btn btn-primary" href="{{ route('ofempresa.create')}}">➕ Crear oferta </a></td>
                                 
                                    <br>
                                        <div class="card-header">{{ __('oferta Actuals') }}</div>
                                      
                                            <div class="card-body">
                                                <table class="table table-striped">
                                                    <thead>
                                               
                                                        <tr>
                                                        <td scope="col"><center>ID</center></td>
                                                            <td scope="col"><center>titol</center></td><!------la meva oferta------->
                                                            <td scope="col"><center>cicle</center></td>
                                                            <td scope="col"><center>tipus</center></td>
                                                            <td scope="col"><center>Creat</center></td>
                                                            <td scope="col"><center>candidatures</center></td>
                                                            <td scope="col"><center>___________________</center></td>
                                           
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($ofertas as $oferta)
                                                        
                                                        <tr>
                                                            <td><center>{{ $oferta->id }}</center></td>
                                                            <td><center>{{ $oferta->name }}</center></td>
                                                            <td><center>{{ $oferta->cicle }}</center></td>
                                                            <td><center>{{ $oferta->tipus }}</center></td>
                                                            <td><center>{{ $oferta->created_at }}</center></td>
                                              
                                                       
                                                            <td>
                                                                <center>
                                                                    <a title="Veure candidats" href="{{ route('ofempresa.candidatures', $oferta) }}" class="btn btn-dark">
                                                              
                                                                    <i class="fas fa-users"></i>
                                                           
                                                                    </a>
                                                                </center>
                                                            </td>
                                                        
                                                            <td>
                                                                <center>
                                                                    <a title="Veure" href="{{ route('ofempresa.show', $oferta) }}" class="btn btn-dark">
                                                                        <i class="fas fad fa-eye"></i>
                                                                        
                                                                    </a>

                                                                    <a  title="Editar" class="btn btn-warning"  href="{{ route('ofempresa.edit', $oferta ) }}">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                </center>
                                                            </td>
                                                    
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            
                                                {!! $ofertas->links() !!}
                               
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
 
            <br><br><br><br> <br><br> <br>
          

@include('estil/perfil')


@endsection