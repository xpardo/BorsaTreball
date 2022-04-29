@extends('layouts.app')
 
 @section('content')
   
@include('borsa.header')




    <nav class="navbar navbar-expand-lg navbar-light m-2"  style="background-color: #bcdefd;">
    
         
                           
            <div class="col-12 col-md-3">



            </div>
        <!--Menu-->
            <div class="lletres">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                    <ul class="navbar-nav mr-auto">

                            <li class="nav-item active">
                                <a class="nav-link"  href="{{url('borsa')}}">  <i class="fa fa-duotone fa-user">Home</i></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('perfilEmpre')}}">  <i class="fa fa-duotone fa-user">Perfil</i></a>
                            </li>
            
                    
                        <li class="nav-item active">
                            <a class="nav-link"  href="{{url('MyOferta')}}">  <i class="fa fa-duotone fa-user">Oferta</i></a>
                        </li>
                            
                        
                    </ul>

                </div>
             </div>

    </button>

    </nav>

 
  

  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div  class="btn btn-info ">
                                                            
                                            <label class="col-md-1"> tipus: </label>
                                                <div class="form-check form-check-inline ">
                                                    <label for="tipusP" class="form-check-label"> pública </label>
                                                    <input type="checkbox" name="tipus"   class="form-check-input @error('gender') is-invalid @enderror"
                                                        id="tipusP" value="Pr" {{ old('tipus')== 'P' ? 'checked' : '' }}>
                                                </div>
                                                <div class="form-check form-check-inline">

                                                    <label for="tipusI" class="form-check-label"> Interna</label>
                                                    <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                    id="tipusI" value="I" {{ old('tipus')== 'I' ? 'checked' : '' }}>
                                                </div>

                                                

                                        </div>
                                    <br>
                                    <td><a  class="btn btn-primary" href="{{url("CreateOfert")}}">➕ Crear file </a></td>
                                    <br>
                                        <div class="card-header">{{ __('oferta Actuals') }}</div>
                                        
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                               
                                                        <tr>
                                                        
                                                            <td scope="col">nom</td><!------la meva oferta------->
                                                            <td scope="col">cicle</td>
                                                            <td scope="col">candidatures</td>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($ofertas as $oferta)
                                                        <tr>
                                                    
                                                            <td>{{ $oferta->name }}</td>
                                                            <td>{{ $oferta->cicle }}</td>
                                                            <td>{{ $oferta->candidatures }}</td>
                                                        
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
                </div> 
            </div> 
        </div>
    </div>            
  
        <br><br>

     
                    @include('borsa.footer')

@include('estil/perfil')


@endsection