@extends('layouts.app')
 
@section('content')
@include('borsa.header')
@include('borsa.menuEmpre')
        <div class="py-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" bg-white border-b border-gray-200">
                    <div class="container ">
                    <div class="card-header"><center>{{ __('Candidats') }}</center></div>
                       <br>
                       
                       @include('flash')   
                            <table class="table table-striped">
                            
                                <thead class="table-dark">
                                               
                            
                                    <tr>
                                        
                                    <td scope="col"><center>Nom Oferta</center></td>  
                                        <td scope="col"><center>Nom</center></td>
                                        <td scope="col"><center>Cognom</center></td>    
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
                                        <td scope="col"><center>{{ $candi->name }}</center></td>
                                        <td scope="col"><center>{{ $candi->user }}</center></td>
                                        <td scope="col"><center>{{ $candi->cognom }}</center></td>
                                        <td scope="col"><center>{{ $candi->neixement }}</center></td>
                                        <td scope="col"><center>{{ $candi->genere }}</center></td>
                                        <td scope="col"><center>{{ $candi->email }}</center></td>
                                        <td scope="col"><center>{{ $candi->telefon }}</center></td>
                                        <td scope="col"><center>{{ $candi->estat }}</center></td>
                                        <td scope="col"><center>{{ $candi->fet }}</center></td>
                                        <td scope="col"><center>{{ $candi->treballat }}</center></td>

                                        <td scope="col"><center><a class="btn btn-dark" href="{{ Route('ofempresa.curriculum', [$ofempresa, $candi])}}" target="blank_"> <i class="fas fa-sticky-note"></i></a></center></td>
                                        <td scope="col"><center><a class="btn btn-dark" href="{{ Route('ofempresa.presentacio', [$ofempresa, $candi])}}" target="blank_"><i class="fas fa-envelope"></i></a></center></td>


                                        <td>
                                            <center>
                                                <a title="View" href="{{ route('ofempresa.seleccionar', [$ofempresa, $candi]) }}" class="btn btn-success">
                                            
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
        </div> 
  

        <br><br><br><br><br><br>

@include('estil/perfil')


@endsection