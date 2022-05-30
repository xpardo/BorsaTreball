@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuAlumn')

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                              
                                <div class="card-body">
                                
                 
                                  
                                    <form action="{{route('perfilAlum.update')}}" method="PATCH">
                                        @csrf
                                        @method("PUT")
                                    


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
                                                    <label for="neixement" >{{__('Data de naixement')}}</label><br><br>
                                                    <input type="date" name="neixement" class="form-control @error('neixement') is-invalid @enderror" id="neixement"  value="{{ Auth::user()->neixement }}" required autocomplete="neixement" autofocus>
                                                    @error('neixement')
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
                                                    <label for="cp">{{__('Codi Postal')}}</label><br><br>
                                                    <input type="text" id="cp" name="cp" class="form-control @error('cp') is-invalid @enderror" id="cp" value="{{ Auth::user()->cp }}" required autocomplete="cp" autofocus>
                                                    @error('cp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                           
                                                </div>
                                            </div>

                                            <div class="contenedor-input">
                                                <label for="telefon">{{__('telefón/móbil')}}<i class="bi bi-telephone"></i></label><br><br>
                                                <input type="text" name="telefon" class="form-control @error('telefon') is-invalid @enderror"  id="telefon"  value="{{ Auth::user()->telefon }}"  autocomplete="telefon" autofocus>
                                                @error('telefon')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="contenedor-input">
                                                <label  for="poblacio">{{__('Població')}}</label><br><br>
                                                <input type="text" name="poblacio" class="form-control @error('poblacio') os-invalid @enderror" id="poblacio" value="{{ Auth::user()->poblacio }}" required autocomplete="poblacio" autofocus>
                                                @error('poblacio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="contenedor-input">

                

                            <div class="from-group form-row ">

                            <p><b><label>{{__('Estas en practiques ?')}}</label></b><p><br>
                       
                                <label for="estatSi" class="form-check-label m-2"> {{__('Si')}} </label>
                                <input type="checkbox" name="estat"  class="form-check-input @error('estat') is-invalid @enderror"
                                 id="estatSi" value="Si" {{ old('estat')== 'Si' ? 'checked' : '' }}>

                                <br>

                                <label for="estatNo" class="form-check-label m-2"> {{__('No')}} </label>
                                <input type="checkbox"  name="estat"  class="form-check-input @error('estat') is-invalid @enderror"
                                id="estatNo" value="No" {{ old('estat')== 'No' ? 'checked' : '' }}>

                            </div>

                            <br>
                            
                            <div class="from-group form-row ">

                            <p><b><label>{{__('Has fet practiques abans ?')}}</label></b><p><br>

                                <label for="fetSi" class="form-check-label m-2"> {{__('Si')}} </label>
                                <input type="checkbox"  name="fet"  class="form-check-input @error('fet') is-invalid @enderror"
                                id="fetSi" value="Si" {{ old('fet')== 'Si' ? 'checked' : '' }}>

                                <br>

                                <label for="fetNo" class="form-check-label m-2"> {{__('No')}} </label>
                                <input type="checkbox"  name="fet"  class="form-check-input @error('fet') is-invalid @enderror"
                                id="fetNo" value="No" {{ old('fet')== 'No' ? 'checked' : '' }}>

                            </div>

                            <br>
                          
                            <div class="from-group form-row ">

                                <p><b><label>{{__('Estas o has treballat ?')}}</label></b><p>
                                    <br>
                                
                                    <label for="treballatSi" class="form-check-label m-2">{{__('Si')}} </label>
                                    <input type="checkbox"  name="treballat"  class="form-check-input @error('treballat') is-invalid @enderror"
                                    id="treballatSi" value="Si" {{ old('treballat')== 'Si' ? 'checked' : '' }}>
                      
                                    <br>
                                    <label for="treballatNo" class="form-check-label m-2 "> {{__('No')}} </label>
                                    <input type="checkbox"  name="treballat"  class="form-check-input @error('treballat') is-invalid @enderror"
                                    id="treballatNo" value="No" {{ old('treballat')== 'No' ? 'checked' : '' }}>
                                

                            </div>
                   

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