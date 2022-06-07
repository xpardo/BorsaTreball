@extends('layouts.app')
 
 @section('content')
@include('borsa.header')

@include('borsa.menuAlumn')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">
                        <div class="container">
                            <div class="row justify-content-center">
                            
                                    <div class="card">
                                   
                                    <br>
                                        <div class="card-header" style="border-radius:15px;">{{ __('oferta Actuals') }}</div>
                                      
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                               
                                                        <tr>
                                                      
                                                        <td scope="col"><center>Id_ofert</center></td>
                                                        <td scope="col"><center>Empresa</center></td> 
                                                        <td scope="col"><center>Oferta</center></td>   
                                                        <td scope="col"><center>Veure Oferta</center></td>  
                                                        <td scope="col"><center>Eliminar</center></td>  

                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($candis as $candi)
                                                        
                                                        <tr>
                                                            
                                                            <td><center>{{ $candi->id_ofert }}</center></td>
                                                            <td><center>{{ $candi->empre }}</center></td>
                                                            <td><center>{{ $candi->name }}</center></td>
                                                            <td> <center> <a title="View" href="{{ route('perfilAlum.show', $candi) }}">
                                                                    <h1 class="btn btn-dark">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </h1>
                                                                </a></center>
                                                            </td>
                                                            <td> 
                                                                
                                                        <center>
                                                                <form id="form" method="POST" action="{{ route('candi.destroy', $candi) }}">
                                                                    @csrf
                                                                    @method("DELETE")
                                                                    <button id="destroy" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">🗑️ </button>
                                                                    @include('js/modal')
                                                                </form>
                                                                                                                <!-- Modal -->
                                                        </center>  
                                                            </td>
                                                            
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
            </div> 
 
            <br>
          

@include('estil/perfil')


@endsection