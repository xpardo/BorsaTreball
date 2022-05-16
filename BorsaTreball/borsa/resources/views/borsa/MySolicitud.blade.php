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
                                        <div class="card-header">{{ __('oferta Actuals') }}</div>
                                      
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                               
                                                        <tr>
                                                        <td scope="col"><center>ID</center></td>
                                                        <td scope="col"><center>Id_ofert</center></td>
                                                                
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($candi as $candi)
                                                        
                                                        <tr>
                                                            <td><center>{{ $candi->id }}</center></td>
                                                            <td><center>{{ $candi->id_ofert }}</center></td>
                                                          
                                                       
                                                           
                                                            

                                                               
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
 

          

@include('estil/perfil')


@endsection