@extends('layouts.app')
 
 @section('content')
@include('borsa.header')
@include('borsa.menuEmpre')
<div class="py-12">
     
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" bg-white border-b border-gray-200">
                    <div class="container ">
                        
                            <div class="row ">
                            
                                    <br>
                                        <div class="card-header">{{ __('Candidats' ) }}</div>
                                   
                                           
                                                <table class="table">
                                                    <thead>
                                               
                                                        <tr>
                                                         
                                                            <td scope="col"><center>Id_ofert</center></td>
                                                            <td scope="col"><center>Nom</center></td>  
                                                            <td scope="col"><center>Neixement</center></td>  
                                                            <td scope="col"><center>Genere</center></td>  
                                                            <td scope="col"><center>Email</center></td> 
                                                            <td scope="col"><center>Telefon</center></td> 
                                                            <td scope="col"><center>Esta en practiques</center></td>
                                                            <td scope="col"><center>Ha fet practiques</center></td>  
                                                            <td scope="col"><center>Esta o ha treballat</center></td>  
                                                            <td scope="col"><center>curriculum</center></td> 
                                                            <td scope="col"><center>carta de presentacio</center></td> 
                                                            <td scope="col"><center>Seleccionar</center></td> 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($candis as $candi)
                                                        
                                                        <tr>
                                                        
                                                            <td><center>{{ $candi->id_ofert }}</center></td>
                                                            <td><center>{{ $candi->user }}</center></td>
                                                            <td><center>{{ $candi->neixement }}</center></td>
                                                            <td><center>{{ $candi->genere }}</center></td>
                                                            <td><center>{{ $candi->email }}</center></td>
                                                            <td><center>{{ $candi->telefon }}</center></td>
                                                            <td><center>{{ $candi->estat }}</center></td>
                                                            <td><center>{{ $candi->fet }}</center></td>
                                                            <td><center>{{ $candi->treballat }}</center></td>
                                                        
                                                            <td>
                                                                <center>
                                                                    <a title="View" href="{{ route('ofempresa.curri', $candi) }}" class="btn btn-dark">
                                                                    <i class="fas fa-sticky-note"></i>
                                                           
                                                                    </a>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <a title="View" href="{{ route('ofempresa.presen', $candi) }}" class="btn btn-dark">
                                                              
                                                                    <i class="fas fa-envelope"></i>
                                                           
                                                                    </a>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <a title="View" href="{{ route('ofempresa.email', $candi) }}" class="btn btn-success">
                                                              
                                                                    <i class="fas fa-user-plus"></i>
                                                           
                                                                    </a>
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
 

          <br><br><br><br><br><br>

@include('estil/perfil')


@endsection