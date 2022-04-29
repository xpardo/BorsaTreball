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

            <!-- Registrarse -->
            <div id="registrarse">
                <h3><strong>Registrarse</strong></h3>

             <!--    <form nmethod="post"  action="perfilEmpre" > -->
            <form action="{{ route('register.customs') }}" method="POST" enctype="multipart/form-data"> 
                @csrf 
                    <p>Dades d'acces personal <i class="bi bi-person"></i></p>
                    <div class="fila-arriba">
                        <div class="contenedor-input">

                            <label for="name">{{__('Nom')}}</label><br><br>
                            <input type="text" name="name"   class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="contenedor-input">

                            <label for="cognom">{{__('Cognom')}}</label><br><br>
                            <input type="text" name="cognom" class="form-control @error('cognom') is-invalid @enderror" id="cognom" value="{{old('cognom')}}" required autocomplete="cognom" autofocus>
                            @error('cognom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="contenedor-input">

                        <div class="contenedor-input">
                            <label>{{__('Email')}}</label><br><br>
                            <input type="email" name="email" rclass="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" equired autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="contenedor-input">
                            <label  for="password">{{__('Password') }}</label><br><br>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password" value="{{old('password')}}" require autocomplete="new-password" autofocus>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>

                                </span>
                            @enderror
                        </div>


                        

                        <div class="contenedor-input">
                            <label for="password_confirmation">{{__('Repetir password')}}</label><br><br>
                            <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation">
                        </div>


                    </div>

                    <p>Dades de l'empresa <i class="bi bi-person-rolodex"></i></p>

                    <div class="contenedor-input">

                        <label for="empre">{{__('Nom de la empresa')}}</label><br><br>
                        <input type="text" name="empre" class="form-control @error('empre') is-invalid @enderror" id="empre" value="{{old('empre')}}" required autocomplete="empre" autofocus>

                    </div>

                    <div class="contenedor-input">
                    <label for="telefon">telefón/movil<i class="bi bi-telephone"></i></label><br><br>
                        <input type="text" name="telefon" class="form-control @error('telefon') is-invalid @enderror" id="telefon" value="{{old('telefon')}}" autocomplete="telefon" autofocus>
                    </div>



                    <div class="contenedor-input">
                        <label for="poblacio">{{__('Població')}}</label><br><br>
                        <input type="text" name="poblacio"  class="form-control" id="poblacio" required>
                    </div>


                    <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-success btn-block">{{__('Registrar-se')}}</button>
                        </div>

                   
                    <p>
                    <a  href="{{url('/')}}"><u>home</u></a>
                    </p>
                    <p>
                    <a  href="{{url('login')}}"><u>Login</u></a>
                    </p>
                    @method('PUT')
                </form>
            </div>
        </div>
    </div>
  




@include('estil/regi')
@include('borsa.footer')
@endsection