@extends('layouts.app')
 
 @section('content')


   
    @include('borsa.header')


    <div class="contenedor-formularios">



        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">

            <!-- Registrar-se -->
            <div id="registrarse">
                <h1>registrar-se</h1>

               
                <form action="{{ route('registreAlumne') }}" method="POST" enctype="multipart/form-data"> 
               
                    @csrf 
                    <div class="fila-arriba">
                        <div class="contenedor-input">

                            <label for="name" >{{__('Nom')}}</label><br><br>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror



                            <label for="neixement" >{{__('Data de naixement')}}</label><br><br>
                            <input type="date" name="neixement" class="form-control @error('neixement') is-invalid @enderror" id="neixement"  value="{{old('neixement')}}" required autocomplete="neixement" autofocus>
                            @error('neixement')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="contenedor-input">

                            <label for="cognom">{{__('Cognom')}}</label><br><br>
                            <input type="text" name="cognom" class="form-control @error('cognom') is-invalid @enderror"  id="cognom" value="{{old('cognom')}}" required autocomplete="cognom" autofocus>
                            @error('Cognom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="cp">{{__('Codi Postal')}}</label><br><br>
                            <input type="text" id="cp" name="cp" class="form-control @error('cp') is-invalid @enderror" id="cp" value="{{old('cp')}}" required autocomplete="cp" autofocus>
                            @error('cp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    <div class="contenedor-input">

                        <div class="from-group form-row">
                            <label for="genere" class="col-3">{{__('Genere')}} </label><br><br>
                            <select name="genere" class="form-control @error('genere') is-invalid @enderror" id="genere" autofocus>
                                <option value="0"> </option>
                                <option value="Home"> Home  </option>
                                <option value="Dona"> Dona  </option>
                                <option value="Altre"> Altre </option>
                            </select>
                        </div>



                    </div>
                    <div class="contenedor-input">
                        <label for="telefon">{{__('telefón/móbil')}}<i class="bi bi-telephone"></i></label><br><br>
                        <input type="text" name="telefon" class="form-control @error('telefon') is-invalid @enderror"  id="telefon"  value="{{old('telefon')}}"  autocomplete="telefon" autofocus>
                        @error('telefon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="contenedor-input">
                        <label  for="poblacio">{{__('Població')}}</label><br><br>
                        <input type="text" name="poblacio" class="form-control @error('poblacio') os-invalid @enderror" id="poblacio" value="{{old('poblacio')}}" required autocomplete="poblacio" autofocus>
                        @error('poblacio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="contenedor-input">
                        <label>{{__('Email')}}</label><br><br>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="contenedor-input">
                        <label  for="password">{{__('Password') }} </label> <br><br> 
                        <b style="color:#808080">(8 charater, primera lletra en gran i numeros)</b>
                        <br><br>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Example1234" id="password" name="password" require autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>

                            </span>
                        @enderror
                    </div>

                    <div class="contenedor-input">
                        <label for="password_confirmation">{{__('Repetir password')}}</label><br><br>
                        <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation" require autocomplete="new-password">
                    </div>


                    <div class="contenedor-input">

                

                            <div class="from-group form-row offset-1 col-10">


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
                            
                            <div class="from-group form-row offset-1 col-10">

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
                          
                            <div class="from-group form-row offset-1 col-10">

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

                        <div class="form-group row">
                        <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>
                        <div class="col-md-6 captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                            &#x21bb;
                            </button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="captcha" class="col-md-4 col-form-label text-md-right">Enter Captcha</label>
                        <div class="col-md-6">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                        </div>
                    </div>







                        
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-success btn-block">{{__('Registrar-se')}}</button>
                        </div>
                        <br>
                            <b>
                                <a class="inf ">
                                    Pots especificar als cicles i posar  curriculums,
                                    cartas de presentacio i carrtas de recomendació en el perfil
                                </a>
                            </b>
                         
                            <b>
                                <center>
                                    <a  href="{{url('login')}}"><u>Login</u></a>
                                </center>
                            </b>
                 
                </form>
        
            </div>
        </div>
    </div>


@push('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endpush
  







@include('estil/regi')


@endsection