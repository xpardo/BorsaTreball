@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">
                        <div class="container">
                            <div class="row justify-content-center">
                            
                                    <div class="card">
                                    <br>
                                        <div  class="btn btn-info ">
                                     
                                            <b class="col-md-1"> Tipus: </b>
                                                <div class="form-check form-check-inline ">
                                                    <label for="tipusP" class="form-check-label"> {{__('pública')}} </label>
                                                    <input type="checkbox" name="tipus"   class="form-check-input @error('gender') is-invalid @enderror"
                                                        id="tipusP" value="Pr" {{ old('tipus')== 'P' ? 'checked' : '' }}>
                                                </div>
                                                <div class="form-check form-check-inline">

                                                    <label for="tipusI" class="form-check-label"> {{__('Privada')}}</label>
                                                    <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                    id="tipusI" value="I" {{ old('tipus')== 'I' ? 'checked' : '' }}>
                                                </div>

                        
                                                

                                        </div>
                                    <br>
                                    <td><a  class="btn btn-primary" href="{{url("CreateOfert")}}">➕ Crear oferta </a></td>
                                    <br>
                                        <div class="card-header">{{ __('oferta Actuals') }}</div>
                                      
                                            <div class="card-body">
                                                <table class="table">
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
                                                            <td><center>{{ $oferta ->candidatures }}</center></td> 
                                                       
                                                            
                                                            <td>
                                                                 
                                                           


                                                                <form action="{{ route('destroy',$oferta ) }}" method="POST">   
                                                        
                                                                    <a title="View" href="{{ route('showOfert', $oferta) }}" class="btn btn-dark">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>

                                                                    <a class="btn btn-warning"  href="{{ route('editOfert', $oferta ) }}">📝 </a>


                                                                    @method('DELETE')      
                                                                    @csrf
                                                                
                                                                    <button type="submit" class="btn btn-danger">Del</button>
                                                                
                                                                </form>
                                                  
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
 

          

@include('estil/perfil')


@endsection