@extends('layouts.app')
    @section('content')
        @include('borsa.header')
        @include('borsa.menuEmpre') 

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                              
                                <div class="card-body">
                                
                 
                                  
                                    <form action="{{route('perfilEmpre.update')}}" method="PATCH">
                                        @csrf
                                        @method("PUT")
                                    
                                        <center><h2>Dades d'acces personal <i class="bi bi-person"></i></h2></center>

                                        <div class="dropdown">
                                            <div class="fila-arriba">
                                                <div class="contenedor-input">

                                                    <label for="name" >{{__('Nom')}}</label><br><br>
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus> 
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                

                                                  
                                                </div>
                                                   
                                                <div class="contenedor-input">

                                                    <label for="cognom">{{__('Cognom')}}</label><br><br>
                                                    <input type="text" name="cognom" class="form-control @error('cognom') is-invalid @enderror"  id="cognom" value="{{ Auth::user()->cognom }}" required autocomplete="cognom" autofocus>
                                                    @error('Cognom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                 

                           
                                                </div>
                                            </div>
                                            <br> <br> <br> <br> <br>      
                                            <div class="contenedor-input">

                                        
                               
                                            <center><h2>Dades de l'empresa <i class="bi bi-person-rolodex"></i></h2></center>

                                            <div class="contenedor-input">

                                                <label for="empre">{{__('Nom de la empresa')}}</label><br>
                                                <input type="text" name="empre" class="form-control @error('empre') is-invalid @enderror" id="empre" value="{{ Auth::user()->empre }}" required autocomplete="empre" autofocus>
                                                @error('empre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }} </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="contenedor-input">
                                            <label for="telefon">telefón/mòbil<i class="bi bi-telephone"></i></label><br><br>
                                                <input type="text" name="telefon" class="form-control @error('telefon') is-invalid @enderror" id="telefon" value="{{ Auth::user()->telefon }}" autocomplete="telefon" autofocus>
                                                @error('telefon')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }} </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>


                                            <div class="contenedor-input">
                                                <label for="poblacio">{{__('Població')}}</label><br><br>
                                                <input type="text" name="poblacio"  class="form-control @error('poblacio') is-invalid @enderror" id="poblacio" value="{{ Auth::user()->poblacio }}" required autocomplete="poblacio"  autofocus>
                                                @error('poblacio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>






                                        </div>


                                        <br><br>
                            
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @include('estil/perfil')

@endsection