@extends('layouts.app')
 
 @section('content')



    
    @include('borsa.header')
    @if ($errors->any())
        <div class ="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif



    <div class="contenedor-formularios">

        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">

            <!-- Registrar-se -->
            <div id="registrarse">
                <h3><strong>Registrar-se</strong></h3>

                <form nmethod="post"  action="perfilEmpre" >
                    @csrf 
                    <p>Dades d'acces personal <i class="bi bi-person"></i></p>
                    <div class="fila-arriba">
                        <div class="contenedor-input">

                            <label for="name">{{__('Nom')}}</label><br><br>
                            <input type="text" name="name"  
                            class="form-control @error('name') is-invalid @enderror" id="name" required  autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="contenedor-input">

                            <label for="cognom">{{__('Cognom')}}</label><br><br>
                            <input type="text" name="cognom" 
                            class="form-control @error('name') is-invalid @enderror" id="cognom" required autocomplete="cognom" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="contenedor-input">

                        <div class="contenedor-input">
                            <label  for="email"> {{__('Email')}}</label><br><br>
                            <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" id="email" equired autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="contenedor-input">
                        <label  for="password">{{__('Password') }}</label><br><br>
                        <input type="password"  class="form-control @error('password') is-invalid @enderror"  id="password" name="password" require autocomplete="new-password" autofocus>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>

                                </span>
                            @enderror
                        </div>

                        <div class="contenedor-input">
                            <label for="password_confirmation">{{__('Repetir password')}}</label><br><br>
                            <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation" require autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <p>Dades de l'empresa <i class="bi bi-person-rolodex"></i></p>

                    <div class="contenedor-input">

                        <label for="empre">{{__('Nom de la empresa')}}</label><br><br>
                        <input type="text" name="empre"  class="fform-control @error('empre') is-invalid @enderror" id="empre" required autocomplete="empre" autofocus>
                        @error('empre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>

                            </span>
                        @enderror
                    </div>

                    <div class="contenedor-input">
                        <label for="telefon">{{__('telefón/movil')}}<i class="bi bi-telephone"></i></label><br><br>
                        <input type="text" name="telefon" class="form-control @error('telefon') is-invalid @enderror"  id="telefon"  value="{{old('telefon')}}"  autocomplete="telefon" autofocus>
                        @error('telefon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="contenedor-input">

                        <label for="identifi">{{__('Identificacio fiscal (C.I.F o N.I.F)')}}</label><br><br>
                        <input type="text" name="identifi" class="form-control @error(identifi) is_invalid @enderror" id="identifi"  value="{{old('identifi')}}" required autocomplete="identifi" autofocus>
                        @error('identifi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>  
                        @enderror
                    </div>

                    <div class="contenedor-input">
                        <label for="poblacio">{{__('Població')}}</label><br><br>
                        <input type="text" name="poblacio" class="form-control @error('poblacio') is_invalid @enderror" id="poblacio" alue="{{old('identifi')}}" required autocomplete="poblacio" autofocus>
                        @error('poblacio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="submit"  value="Registrar-se "> <br>
                    <p>
                    <a  href="{{url('borsa')}}"><u>home</u></a>
                    </p>
                    <p>
                    <a  href="{{url('login')}}"><u>Login</u></a>
                    </p>
                    @method('PUT')
                </form>
            </div>
        </div>
    </div>
    @include('borsa.footer')




@include('estil/regi')
@endsection